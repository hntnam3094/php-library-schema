<?php
namespace Vinaweber\VWCache;
require 'URI.php';
use Vinaweber\VWCache\URI;

class  VWCache{
    protected $currentUrl = '';
    protected $filename;
    protected $folder = 'cache/vwcache';
    private $filePath = '';
    protected $urlList = [];
    protected $urlPrefix = [];
    private $cacheStatus = false;
    private $uri = null;


	public function __construct()
    {
        $uri = new URI();
        $this->uri = $uri;

        $this->currentUrl = $uri->getCurrentUrl();

        $this->validFolder();

    }


    public function start(){
        if(!$this->checkStatus()) return;
        $this->load();
        echo 'cache run';
        ob_start();
    }

    public function end(){

        if(!$this->cacheStatus) return;

        $content = ob_get_clean();
        $this->writeCacheFile($content);
        echo $content;
    }

    public function setUrl($url){
        if(!is_array($url)){
            $url = [$url];
        }

        $this->urlList = array_unique(array_merge($this->urlList,$url));
    }

    public function setUrlPrefix($url){
        if(!is_array($url)){
            $url = [$url];
        }

        $this->urlPrefix = array_unique(array_merge($this->urlPrefix,$url));
    }

    public function deleteCache($url){
        $filename = $this->hash($url);
        $filePath = $this->folder.'/'.$filename;
        unlink($filePath);
    }

    public function getCurrentUrl(){
	    return $this->currentUrl;
    }

    protected function hash($url){
	    return md5($url);
    }

    protected function checkStatus(){

        if(!$this->urlList && !$this->urlPrefix){
            return false;
        }

        if($this->uri->getMethod() != 'GET'){
            return false;
        }

        if($this->checkUrl()){
            $this->cacheStatus = true;
            $this->filename = $this->hash($this->currentUrl);
            $this->filePath = $this->folder.'/'.$this->filename;
            return true;
        }

        $this->cacheStatus = false;
        return false;

    }

    protected function checkUrl(){


	    if(in_array($this->currentUrl,$this->urlList)){
	        return true;
        }

        foreach ($this->urlPrefix as $s) {
            $pos = strpos($this->currentUrl,$s);

            if ($pos === 0) {
                return true;
            }
        }

        return false;
    }



    protected function validFolder(){

        $folders = explode('/', $this->folder);
        $folders = array_filter($folders);
        $existFolder = '';
        if($folders){
            foreach ($folders as $folder){
                $existFolder .= $folder.'/';
                $path = realpath($existFolder);
                // If it exist, check if it's a directory
                if($path == false or !is_dir($path))
                {
                    mkdir($existFolder,0755);
                }
            }
        }

        $this->folder = realpath($existFolder);

    }

    protected function load(){
        if($content = $this->readCacheFile($this->filePath)){
            echo $content;
            exit();
        }
    }

    protected function writeCacheFile($content){
        $myfile = fopen($this->filePath, "w") or die("Unable to open file!");
        fwrite($myfile, $content);
        fclose($myfile);
    }

    protected function readCacheFile(){
	    if(!file_exists($this->filePath)){
	        return '';
        }
        $myfile = fopen($this->filePath, "r") or die("Unable to open file!");
        $content =  fread($myfile,filesize($this->filePath));
        fclose($myfile);
        return $content;
    }


}
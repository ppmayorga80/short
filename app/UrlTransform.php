<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrlTransform extends Model
{
    //
    protected $keytable=array(
        "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"
    );

    protected $len=6;

    public function transform($id=0){
        $base = strlen($this->keytable[0]);
        $offs = $id%$base;

        $key="";
        for($i=0;$i<$this->len;$i++){
            $d = $id%$base;
            $id = (int)($id/$base);
            $ki = substr($this->keytable[($i+$offs)%$base],$d,1);
            $key = "$ki$key";
        }

        return $key;
    }
    protected function newShortUrl(){
        $id = time();
        return $this->transform($id);
    }
    protected function transformKey($key){
        $row = UrlTransform::whereShortUrl($key)->first();
        if(count($row)==1)
            return $row;
        else
            return "";
    }
    protected function addUrl($url)
    {
        $id = time();
        $key = $this->transform($id);

        $row =  new UrlTransform();
        $row->original_url = $url;
        $row->short_url = $key;
        $row->tag = "auto";
        $row->save();
    }
    protected function addUrlWithKey($url,$key)
    {
        $row = UrlTransform::whereShortUrl($key)->first();
        if(count($row)>0)
        {
            return 0;
        }

        $row =  new UrlTransform();
        $row->original_url = $url;
        $row->short_url = $key;
        $row->tag = "set";
        $row->save();

        return 1;
    }

}

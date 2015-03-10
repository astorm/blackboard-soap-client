<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ContentFileMetadataVO extends Base
{
    const NAMESPACE_XSD = 'http://content.ws.blackboard/xsd'; 
    const NAME          = 'contentFile'; 
    //start soap data
    public $contentId;
    public $expansionData;
    public $fileAction;
    public $fileSize;
    public $id;
    public $linkName;
    public $parentId;
    public $storageType;
    public $strName;
    //end soap data

    public function getData()
    {
        $data = [
            'contentId'=>$this->contentId, 
            'expansionData'=>$this->expansionData, 
            'fileAction'=>$this->fileAction, 
            'fileSize'=>$this->fileSize, 
            'id'=>$this->id, 
            'linkName'=>$this->linkName, 
            'parentId'=>$this->parentId, 
            'storageType'=>$this->storageType, 
            'strName'=>$this->strName, 
        ];

        $data = array_filter($data, function($item){
            if($item)
            {
                return true;
            }
            return false;
        });

        return $data;

    }

}
<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ContentStatusFilter extends Base
{
    const NAMESPACE_XSD = 'http://content.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $contentId;
    public $courseId;
    public $expansionData;
    public $filterType;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'contentId'=>$this->contentId, 
            'courseId'=>$this->courseId, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'userId'=>$this->userId, 
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
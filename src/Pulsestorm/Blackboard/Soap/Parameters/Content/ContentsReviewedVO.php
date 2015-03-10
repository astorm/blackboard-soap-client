<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ContentsReviewedVO extends Base
{
    const NAMESPACE_XSD = 'http://content.ws.blackboard/xsd'; 
    const NAME          = 'vo'; 
    //start soap data
    public $contentId;
    public $expansionData;
    public $id;
    public $reviewDate;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'contentId'=>$this->contentId, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'reviewDate'=>$this->reviewDate, 
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
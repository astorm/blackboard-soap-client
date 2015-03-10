<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Announcement;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class AnnouncementVO extends Base
{
    const NAMESPACE_XSD = 'http://announcement.ws.blackboard/xsd'; 
    const NAME          = 'announcements'; 
    //start soap data
    public $body;
    public $courseId;
    public $creatorUserId;
    public $expansionData;
    public $id;
    public $permanent;
    public $position;
    public $pushNotify;
    public $restrictionEndDate;
    public $restrictionStartDate;
    public $showOnCourses;
    public $showOnLogin;
    public $title;
    public $titleColor;
    public $type;
    //end soap data

    public function getData()
    {
        $data = [
            'body'=>$this->body, 
            'courseId'=>$this->courseId, 
            'creatorUserId'=>$this->creatorUserId, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'permanent'=>$this->permanent, 
            'position'=>$this->position, 
            'pushNotify'=>$this->pushNotify, 
            'restrictionEndDate'=>$this->restrictionEndDate, 
            'restrictionStartDate'=>$this->restrictionStartDate, 
            'showOnCourses'=>$this->showOnCourses, 
            'showOnLogin'=>$this->showOnLogin, 
            'title'=>$this->title, 
            'titleColor'=>$this->titleColor, 
            'type'=>$this->type, 
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
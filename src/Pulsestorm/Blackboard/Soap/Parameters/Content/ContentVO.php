<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ContentVO extends Base
{
    const NAMESPACE_XSD = 'http://content.ws.blackboard/xsd'; 
    const NAME          = 'content'; 
    //start soap data
    public $allowGuests;
    public $allowObservers;
    public $available;
    public $body;
    public $contentHandler;
    public $described;
    public $endDate;
    public $expansionData;
    public $externalId;
    public $gradebookColumnId;
    public $groupContent;
    public $id;
    public $launchInNewWindow;
    public $lesson;
    public $offlineName;
    public $offlinePath;
    public $parentId;
    public $position;
    public $reviewable;
    public $sequential;
    public $startDate;
    public $title;
    public $titleColor;
    public $tracked;
    public $url;
    //end soap data

    public function getData()
    {
        $data = [
            'allowGuests'=>$this->allowGuests, 
            'allowObservers'=>$this->allowObservers, 
            'available'=>$this->available, 
            'body'=>$this->body, 
            'contentHandler'=>$this->contentHandler, 
            'described'=>$this->described, 
            'endDate'=>$this->endDate, 
            'expansionData'=>$this->expansionData, 
            'externalId'=>$this->externalId, 
            'gradebookColumnId'=>$this->gradebookColumnId, 
            'groupContent'=>$this->groupContent, 
            'id'=>$this->id, 
            'launchInNewWindow'=>$this->launchInNewWindow, 
            'lesson'=>$this->lesson, 
            'offlineName'=>$this->offlineName, 
            'offlinePath'=>$this->offlinePath, 
            'parentId'=>$this->parentId, 
            'position'=>$this->position, 
            'reviewable'=>$this->reviewable, 
            'sequential'=>$this->sequential, 
            'startDate'=>$this->startDate, 
            'title'=>$this->title, 
            'titleColor'=>$this->titleColor, 
            'tracked'=>$this->tracked, 
            'url'=>$this->url, 
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
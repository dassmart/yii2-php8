<?php
namespace app\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class AppComponent extends Component
{
    public function welcome()
    {
        echo "Hello..Welcome to MyComponent";
    }

    public function gridLayout($exportMenu){
        return "<div class='card grid-card'>
                 <div class='card-header'>
                       <div class='float-left'></div>
                <div class='float-right'>$exportMenu</div>  
                  </div>
                <div class='card-body'>
                    {items}
                </div>
                <div class='card-footer'>
                <div class='float-left'>{summary}</div>
                <div class='float-right'>{pager}</div>  
                </div>
                </div>";
    }

}
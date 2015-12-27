<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 24/12/2015
 * Time: 16:27
 */
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use himiklab\thumbnail\EasyThumbnailImage;

class ArticulosWidget extends Widget{
    public $message;
    public $tipo;
    public $rutabase;
    public $items = [];
    public static $imagendefecto = '@frontend/web/img/image-30.jpg';

    public function init(){
        parent::init();
        if($this->message===null){
            $this->message= 'Welcome User';
        }else{
            $this->message= 'Welcome '.$this->message;
        }
    }

    public function run(){
        //return Html::encode($this->message);
        return $this->template();
    }


    public function template(){
        $html = '';
        $html .= Html::beginTag('div', ['class' => 'ot-panel-block']) . "\n";
        $html .= Html::beginTag('div', ['class' => 'article-grid lets-do-2']) . "\n";
        $html .= $this->renderItemsGrid();
        $html .= Html::endTag('div');
        $html .= Html::endTag('div');
        echo $html;
    }

    public function renderItemsGrid(){
        $html = '';
        foreach ($this->items as $i => $item) {

            $html .= Html::beginTag('div', ['class' => 'item']) . "\n";
            $html .= Html::beginTag('div', ['class' => 'item-header']) . "\n";
            $html .= Html::beginTag('a', ['href'=> $item['slug']]) . "\n";
            $html .= Html::beginTag('span', ['class' => 'item-header-category']) . "\n";
            $html .= Html::beginTag('i', ['class' => 'fa fa-folder-open']) . Html::endTag('i');
            $html .= Html::tag('span', $item['categoria']);
            $html .= Html::endTag('span');
            //$html .= Html::img('@web/imagenes/paginas/'.$item['imagen'], ['alt' => $item['titulo']]) . "\n";
            $html .= EasyThumbnailImage::thumbnailImg('@frontend/web/imagenes/paginas/'.$item['imagen'], 367, 232, EasyThumbnailImage::THUMBNAIL_OUTBOUND, ['alt' => $item['titulo']]);
            $html .= Html::endTag('a');
            $html .= Html::endTag('div'); //end item-header

            $html .= Html::beginTag('div', ['class' => 'item-content']) . "\n";
            $html .= Html::beginTag('div', ['class' => 'item-content-head']) . "\n";
            $html .= Html::beginTag('div', ['class' => 'item-content-date']) . "\n";
            $html .= Html::tag('strong', $item['dia']);
            $html .= Html::tag('span', $item['mes']);
            $html .= Html::tag('span', $item['anio']);
            $html .= Html::endTag('div'); //end item-date
            $html .= Html::tag('h3', '<a href="'.$item['slug'].'">'.$item['titulo'].'</a>') . "\n";
            $html .= Html::endTag('div'); //end item-head
            $html .= Html::tag('p', $item['leermas']) . "\n";
            $html .= Html::endTag('div'); //end item-content

            $html .= Html::beginTag('div', ['class' => 'item-footer']) . "\n";
            $html .= Html::beginTag('button', ['class' => 'article-more-arrow right', 'text'=>'ers']) . "\n";
            $html .= Html::beginTag('i', ['class' => 'fa fa-caret-right']) . Html::endTag('i');
            $html .= Html::beginTag('i', ['class' => 'show-hover']) .'Leer más'. Html::endTag('i');
            $html .= Html::endTag('button');

            $html .= Html::beginTag('div', ['class' => 'item-meta']) . "\n";
            if(isset($item['autor'])) {
                $html .= Html::beginTag('a', ['href' => $item['slug']]) . "\n";
                $html .= Html::beginTag('i', ['class' => 'fa fa-pencil']) . Html::endTag('i');
                $html .= Html::tag('span', $item['autor']);
                $html .= Html::endTag('a');
            }

            if(isset($item['comentarios'])) {
                $html .= Html::beginTag('a', ['href' => $item['slug']]) . "\n";
                $html .= Html::beginTag('i', ['class' => 'fa fa-comment']) . Html::endTag('i');
                $html .= Html::tag('span', 'Comentarios');
                $html .= Html::endTag('a');
            }
            $html .= Html::endTag('div'); //end item-header

            $html .= Html::endTag('div'); //end item-content
            $html .= Html::endTag('div');
        }
        return $html;

        /*
         * <div class="item">
                    <div class="item-header">
                        <a href="#">
                            <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-32.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-content">
                        <div class="item-content-head">
                            <div class="item-content-date">
                                <strong>21</strong>
                                <span>Oct</span>
                                <span>2015</span>
                            </div>
                            <h3><a href="#">Sed vehicula justo ut sem auctor sagittis</a></h3>
                        </div>
                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                    </div>
                    <div class="item-footer">
                        <button class="article-more-arrow right"><i class="fa fa-caret-right"></i><i class="show-hover">Read more</i></button>
                        <div class="item-meta">
                            <a href="#"><i class="fa fa-pencil"></i>John Doe</a>
                            <a href="#"><i class="fa fa-comment"></i>16</a>
                        </div>
                    </div>
                </div>*/

        /*$html .= Html::a(Html::tag('div',
                    Html::tag('i', '', ['class' => 'fa fa-upload fa-fw']) . 'Server Rebooted' .
                    Html::tag('span', '4 minutes ago', ['class' => 'pull-right text-muted small'])
                ), Url::to('address'));*/
    }
}
?>
namespace frontend\widgets\yii2-js-widget;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

use frontend\widgets\yii2-js-widget\assets\SimpleWidgetAsset;

class SimpleWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	/**
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}

	public function registerClientScript()
	{
		$view = $this->getView();

		// NOTE: This registers all js/css resources defined within your AssetBundle
		SimpleWidgetAsset::register($view);

		// NOTE: Additional scripts can be regitered like below. As well as functions from your already registered js-files by SimpleWidgetAsset
		$js = 'your_js_function(); let x = 0; console.log(x);';
		$view->registerJs($js);

		// NOTE: Similar for css-resources 
		$css = 'body { color: red; }';
		$view->registerCss($css);
	}

}

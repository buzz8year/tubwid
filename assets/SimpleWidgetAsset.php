namespace frontend\widgets\yii2-js-widget/assets;

use yii\web\AssetBundle;

class SimpleWidgetAsset extends AssetBundle
{

	public $depends = [
		'yii\web\JqueryAsset'
	];
	
	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		$this->js = 'your-script.js';
		return parent::init();
	}
}

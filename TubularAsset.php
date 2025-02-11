namespace yii\tubular;

use yii\web\AssetBundle;

class TubularAsset extends AssetBundle
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

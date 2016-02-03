namespace yii\tubular;

use yii\web\AssetBundle;

class TubularAsset extends AssetBundle
{

	public $depends = [
		'yii\web\JqueryAsset'
	];
	
	public function init()
	{
		$this->sourcePath = __DIR__.'/assets';
		$this->js = [
			'jquery.tubular.1.0'.( YII_ENV_DEV ? '.js' : '.min.js' )
		];
		return parent::init();
	}
}

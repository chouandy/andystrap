<?php
Yii::import('bootstrap.helpers.TbHtml');
Yii::import('bootstrap.behaviors.TbWidget');
Yii::import('bootstrap.widgets.TbActiveForm');

class AdActiveForm extends TbActiveForm
{
	public function CKEditorControlGroup($model, $attribute, $htmlOptions = array())
	{
		$htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
		return AdHtml::activeCKEditorControlGroup($model, $attribute, $htmlOptions);
	}

	public function dropDownListControlGroup($model, $attribute, $data, $htmlOptions = array())
	{
		$htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
		return AdHtml::activeDropDownListControlGroup($model, $attribute, $data, $htmlOptions);
	}

	public function textFieldControlGroup($model, $attribute, $htmlOptions = array())
	{
		$htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
		return AdHtml::activeTextFieldControlGroup($model, $attribute, $htmlOptions);
	}
}
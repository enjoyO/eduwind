<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'lesson-chat-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'lessonId',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'userId',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'playTime',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'fontSize',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'color',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'mode',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'addTime',array('class'=>'col-sm-5')); ?>

	<?php echo $form->textFieldGroup($model,'content',array('class'=>'col-sm-5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

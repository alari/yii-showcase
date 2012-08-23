<?php

class m120821_142623_productImageHolder extends CDbMigration
{
	public function safeUp()
	{
        $this->addColumn("{{catalogue_product}}", "pic_holder_id", "int");
        $this->addForeignKey("prod_pic", "{{catalogue_product}}", "pic_holder_id", "{{images_holder}}", "id");
        $this->addColumn("{{catalogue_product}}", "list_holder_id", "int");
        $this->addForeignKey("prod_list", "{{catalogue_product}}", "list_holder_id", "{{images_holder}}", "id");
	}

	public function safeDown()
	{
		echo "m120821_142623_productImageHolder does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
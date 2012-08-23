<?php

class m120821_142623_productImageHolder extends CDbMigration
{
	public function up()
	{
        $this->addColumn("{{product}}", "pic_holder_id", "int");
        $this->addForeignKey("prod_pic", "{{product}}", "pic_holder_id", "{{images_holder}}", "id");
        $this->addColumn("{{product}}", "list_holder_id", "int");
        $this->addForeignKey("prod_list", "{{product}}", "list_holder_id", "{{images_holder}}", "id");
	}

	public function down()
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
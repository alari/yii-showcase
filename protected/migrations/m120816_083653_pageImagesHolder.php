<?php

class m120816_083653_pageImagesHolder extends CDbMigration
{
	public function up()
	{
        $this->addColumn("{{static_page}}", "pic_holder_id", "int");
        $this->addForeignKey("page_pic", "{{static_page}}", "pic_holder_id", "{{images_holder}}", "id");
        $this->addColumn("{{static_page}}", "list_holder_id", "int");
        $this->addForeignKey("page_list", "{{static_page}}", "list_holder_id", "{{images_holder}}", "id");
	}

	public function down()
	{
		echo "m120816_083653_pageImagesHolder does not support migration down.\n";
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
<?php

class m120821_061145_catImagesHolder extends CDbMigration
{
    public function safeUp()
    {
        $this->addColumn("{{catalogue_category}}", "pic_holder_id", "int");
        $this->addForeignKey("cat_pic", "{{catalogue_category}}", "pic_holder_id", "{{images_holder}}", "id");
        $this->addColumn("{{catalogue_category}}", "list_holder_id", "int");
        $this->addForeignKey("cat_list", "{{catalogue_category}}", "list_holder_id", "{{images_holder}}", "id");
    }

	public function safeDown()
	{
		echo "m120821_061145_catImagesHolder does not support migration down.\n";
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
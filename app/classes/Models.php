<?php

class Models
{
    public function __construct()
    {
        //$this->link = mysqli_connect('localhost', 'root', '', 'price_now_bd');
        $this->link = mysqli_connect('192.168.10.5', 'pricenow_root', 'J@hir467350', 'pricenow_pricenowbd', '3306');
    }

    public function addModel($filename){
        $query = "INSERT INTO models (brand_name, model_name, main_image) VALUES ('$_POST[brandName]', '$_POST[modelName]', '$filename')";
        if (mysqli_query($this->link, $query)) {
            $message = "Model Info Added Successfully!";
            return $message;
        } else {
            die('Add Brand Query Problem Add Brand Query Problem Add Brand Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getAllModelName(){
        $query = "SELECT * FROM models";
        if (mysqli_query($this->link, $query)) {
            $allModels = mysqli_query($this->link, $query);
            return $allModels;
        } else {
            die('getAllModelName Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getAllActiveModelName(){
        $query = "SELECT * FROM models WHERE status = 1";
        if (mysqli_query($this->link, $query)) {
            $allActiveModels = mysqli_query($this->link, $query);
            return $allActiveModels;
        } else {
            die('getAllActiveModelName Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getAllActiveModelByBrand($brand){
        $query = "SELECT * FROM models WHERE status = 1 && brand_name='$brand'";
        if (mysqli_query($this->link, $query)) {
            $allActiveModels = mysqli_query($this->link, $query);
            return $allActiveModels;
        } else {
            die('getAllActiveModelName Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function makeModelNotActive($id){
        $query = "UPDATE models SET status = 0 WHERE id = $id";
        if (mysqli_query($this->link, $query)) {
            $message = "Updated Successfully! ";
            return $message;
        } else {
            die('makeModelNotActive Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function makeModelActive($id){
        $query = "UPDATE models SET status = 1 WHERE id = $id";
        if (mysqli_query($this->link, $query)) {
            $message = "Updated Successfully! ";
            return $message;
        } else {
            die('makeBrandActive Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getModelById($id){
        $query = "SELECT * FROM models WHERE id = '$id'";
        if (mysqli_query($this->link, $query)) {
            $brandById = mysqli_query($this->link, $query);
            return $brandById;
        } else {
            die('getBrandById Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function updateModelInfo($id,$filename){
        $query = "UPDATE models SET
                    brand_name = '$_POST[brandName]',
                    model_name = '$_POST[modelName]',
                    main_image = '$filename'
                    WHERE id = '$id'
                ";
        if (mysqli_query($this->link, $query)) {
            //header('Location: models_manage.php');
            $message = "Models Info Upadated Successfully";
        } else {
            die('updateModelInfo Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function deleteModelById($id){
        $query = "DELETE FROM models where id = '$id'";
        if (mysqli_query($this->link, $query)) {
            header('Location: models_manage.php');
        } else {
            die('deleteModelById Query Problem : ' . mysqli_error($this->link));
        }
    }
}
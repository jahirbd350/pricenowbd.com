<?php

class Brands
{
    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'price_now_bd');
        //$this->link = mysqli_connect('192.168.10.5', 'pricenow_root', 'J@hir467350', 'pricenow_pricenowbd', '3306');
    }

    public function addBrand($filename){
        $query = "INSERT INTO brands (brand_name, brand_logo) VALUES ('$_POST[brandName]', '$filename')";
        if (mysqli_query($this->link, $query)) {
            $message = "Brand Info Added Successfully!";
            return $message;
        } else {
            die('Add Brand Query Problem Add Brand Query Problem Add Brand Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getAllBrandName(){
        $query = "SELECT * FROM brands";
        if (mysqli_query($this->link, $query)) {
            $allBrands = mysqli_query($this->link, $query);
            return $allBrands;
        } else {
            die('getAllBrandName Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getAllActiveBrandName(){
        $query = "SELECT * FROM brands WHERE status = 1";
        if (mysqli_query($this->link, $query)) {
            $allBrands = mysqli_query($this->link, $query);
            return $allBrands;
        } else {
            die('getAllBrandName Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function makeBrandNotActive($id){
        $query = "UPDATE brands SET status = 0 WHERE id = $id";
        if (mysqli_query($this->link, $query)) {
            $message = "Updated Successfully! ";
            //header('location:../../admin/brands_manage.php');
            return $message;
        } else {
            die('makeBrandNotActive Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function makeBrandActive($id){
        $query = "UPDATE brands SET status = 1 WHERE id = $id";
        if (mysqli_query($this->link, $query)) {
            $message = "Updated Successfully! ";
            //header('location:../../admin/brands_manage.php');
            return $message;
        } else {
            die('makeBrandActive Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function getBrandById($id){
        $query = "SELECT * FROM brands WHERE id = '$id'";
        if (mysqli_query($this->link, $query)) {
            $brandById = mysqli_query($this->link, $query);
            return $brandById;
        } else {
            die('getBrandById Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function updateBrandInfo($id,$filename){
        $query = "UPDATE brands SET
                    brand_name = '$_POST[brandName]',
                    brand_logo = '$filename'
                    WHERE id = '$id'
                ";
        if (mysqli_query($this->link, $query)) {
            $message = "Updated Successfully! ";
            //header('location:../../admin/brands_manage.php');
            return $message;
        } else {
            die('updateBrandInfo Query Problem : ' . mysqli_error($this->link));
        }
    }

    public function deleteBrandById($id){
        $query = "DELETE FROM brands where id = '$id'";
        if (mysqli_query($this->link, $query)) {
            $message = "Deleted Successfully! ";
            //header('location:../../admin/brands_manage.php');
            return $message;
        } else {
            die('deleteBrandById Query Problem : ' . mysqli_error($this->link));
        }
    }

}
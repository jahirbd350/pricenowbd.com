<?php

class SmartPhone
{
    public function __construct()
    {
        //$this->link = mysqli_connect('localhost', 'root', '', 'price_now_bd');
        $this->link = mysqli_connect('192.168.10.5', 'pricenow_root', 'J@hir467350', 'pricenow_pricenowbd', '3306');
    }

    public function addSmartPhoneSpecs(){
        /*echo '<pre>';
        print_r($_POST);
        echo '</pre>';*/

        $sql = "INSERT INTO smartphone (brand, model, price_usd, price_bdt_official, price_bdt_unofficial, images, technology, 2g_bands, 3g_bands, 4g_bands, 5g_bands, speed, announced, status, dimensions, weight, build, sim, display_type, display_size, resolution, display_protection, os, chipset, cpu, gpu, card_slot, internal, camera_quad, camera_features, camera_video, selfie_dual, features, selfie_video, loudspeaker, audio_jack, wlan, bluetooth, gps, nfc, radio, usb, sensors, charging, colors, models, sar, sar_eu, price, test_performance, test_display, test_camera, test_loudspeaker, test_battery_life)
                VALUES ('$_POST[brands]', '$_POST[phone_model]', '$_POST[price_in_usd]', '$_POST[price_in_bd_official]', '$_POST[price_in_bd_unofficial]', '$_POST[images]', '$_POST[technology]', '$_POST[bands_2g]', '$_POST[bands_3g]', '$_POST[bands_4g]', '$_POST[bands_5g]', '$_POST[speed]', '$_POST[announced]', '$_POST[status]', '$_POST[dimensions]', '$_POST[weight]', '$_POST[build]', '$_POST[sim]', '$_POST[type]', '$_POST[size]', '$_POST[resolution]', '$_POST[protection]', '$_POST[os]', '$_POST[chipset]', '$_POST[cpu]', '$_POST[gpu]', '$_POST[card_slot]', '$_POST[internal]', '$_POST[quad]', '$_POST[features]', '$_POST[video]', '$_POST[selfie_dual]', '$_POST[selfie_features]', '$_POST[selfie_video]', '$_POST[loudspeaker]', '$_POST[audio_jack]', '$_POST[wlan]', '$_POST[bluetooth]', '$_POST[gps]', '$_POST[nfc]', '$_POST[radio]', '$_POST[usb]', '$_POST[sensors]', '$_POST[charging]', '$_POST[colors]', '$_POST[models]', '$_POST[sar]', '$_POST[sar_eu]', '$_POST[price]', '$_POST[test_performance]', '$_POST[test_display]', '$_POST[test_camera]', '$_POST[test_loudspeaker]', '$_POST[test_battery_life]')
                ";
        if (mysqli_query($this->link,$sql)){
            return 'SmartPhone data added sucessfully!';
        }else{
            die("Query Problem" . mysqli_error($this->link));
        }
    }
}


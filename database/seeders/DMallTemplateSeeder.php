<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DMallTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'en',
                'title' => 'The dubai mall',
                'description' => 'The Dubai Mall is celebrating Europe’s biggest football tournament',
                'game_id' => 1,
                'attachment_type_id' => null,
                'is_phishing'=> 0,
                'reason'=>'trusted sender',
                'short_reason'=>'trusted sender',
                'sender' => 'security@dmall.com',
                'template'=> "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>The dubai mall</title>
</head>

<body>
    <div dir='ltr' style='max-width: 100%;'>
        <div class='gmail_quote'>
            <div bgcolor='#eeeeee' style='background-color: #eeeeee; color: #000000; padding: 0px'>
                <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tbody>
                        <tr>
                            <td valign='top' align='center' bgcolor='#eeeeee'>
                                <table cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                                    <tbody>
                                        <tr>
                                            <td align='center' valign='top' bgcolor='#ffffff'>
                                                <table cellpadding='0' cellspacing='0' width='100%' role='presentation'
                                                    style='background-color: #000000; min-width: 100%'>
                                                    <tbody>
                                                        <tr>
                                                            <td style='padding: 13px 0px'>
                                                                <table width='100%' cellspacing='0' cellpadding='0'
                                                                    role='presentation'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align='center'>
                                                                                <a href='https://www.dubaiopera.com/events/the-sound-of-hollywood/?utm_source=salesforce%e2%80%8b%e2%80%8b&utm_medium=email%e2%80%8b%e2%80%8b&utm_campaign=20210707_EMG_TDM_REASONS_TO_VISIT'
                                                                                    title='The Dubai Mall'
                                                                                    target='_blank'>
                                                                                    <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4YAAABFCAYAAAAW5/iKAAAACXBIWXMAACE3AAAhNwEzWJ96AAAQ6ElEQVR42u2d4XXbOBaF7+yZ//JUIG0F0lRgpgJrKzBTgTUVhKkgmgrCVLB2BaErGKeCkSpYuQLvD4LHGkcWHiWKBIHvO8cnmTOKRYIA+C5w8d4vLy8vAgAAgCjI3Z8lTZEEa0krmuEfzCQtXdvExpW7r5zHDJfgXzQBAABANBQIhaRYuGcOr5ROQMXIStKtE78ACEMAAAA4SCZpKmnu/g5p8MkJRKiF03Wk93al10UfFgPgYsLwJbKfPl/AvmsJZeBWhmsdIogo6EfBUHXQZk/u91Tu2RauX8Wychv6mI/h+nz9ar9vLQmGD86pijhwtMxTqVLS/TWLXDDlkibu70vFuyua2ji3xMK9xei/Mo8AQEfM9/7erNh+cn9u9wL8e0kbmgtO6Ff7favh2fWr0vWtVMnetM21C5QZa+mMk0Jp7ySVe8IpRvYt4hP33wVdH7oEKykA9MFU0o2kL5L+diJxJc5JwPlMXN/6rxNBeaLtcOi+CRrTImVLacwW0mZ8Tw1jHgBhCACjY74nEu/FeSjohqmkr6p3EK8Suu+Z6oQUb7lNrB0g7sQrx/p/Efk9Fu/Md4hDQBgCQFTcSPrugnkEInTBtepd6VR2T44FxWQoTYu50tspLhW3hTTTz7uFlrEPgDAEgFEH841AnNEccCZTpbFzONPh3UKEYbrcKZ1FttgtpD7xNxULqoAwBIDIBeITAS10wMSJw5jJDW2Q0xWSo1QaiyJF5PeYGYRvQXcHhCEAxB7Qf1F9/pAzUumwlfR45Gd7wu+M2Vq3X9eMwBH2mSbw3EvFbSGVcXw3GYgBzuZXSR8u8HtzHbe2SNI3UXcH/NBPwuGDJ0BtznNl7iU17eA7b1Tv+CxF2v0UKI3BbOb6RG4MDD+53x1bH1oZ73/q2uueLpYUd+6ZV5EKptgtpDP3DrRQCGcAdCQMLzFhZIbPbBS/xQfOh34SDr7ncP/OXNAE8fMTv3eu2lqauT8BKr0Wu1/ptV5maoFTm/tZIQyTpFS9aLeLTDAVCTy7Nvd468b4ji4P54CVFAAuHcAXLjD5TdJHST9O+D3NWbEFTQp77Fz/+qC60L0vcIrJlpyr3a78NeMnSWK0lJaK30I6k9959xbO5QPCEABGFcSXLjj9oPrMWFtxyJlDOERlDIryiO75lGCfwDFNYspSWih+C+mpc9WK9yMgDAFgrIF85gRimx3EqbDDwWFK+RcbYhGGuU47w3srklSkPD7GLhoWstnGx441qdRbJqqPbQAgDAFgtAJxIelzi39zLbIswmF8/WKuOFbU84H+LYyXGCylZSLPyppU6pQ5EABhCACjCOj/I/85sYZP4rwU/Ewlf0mLsfebTOdZ6bCbpcudxrujVOj0BGZjFIbnLACwawgIQwAYPfcu6LWKwzVNBgfwZa7NRn5/hef/+8YPBe/TphzhwkAqFlLJXoLnUsISEIYAAEEF9VZxeE2ACycIwzEzk3+3sJR/15TAMV0mGp8ls0zo+RSe/7+V/+gFGYgBYQgAUQX21sC1oLmAoPEfrA2fm4pFlZS50XjshoXSsZDm8ieVKoxCmcUfQBgCQDSUkh4Mn+M8BaTCTP66Zt8kbVTbsn277ghD5tjQLaUpWUgtY/LZje2NG+vHIAMxIAwBILqX5LPxcwCxUxg+05y73cl/Bvda8dS2g/aMwVJaJvQ8Mvlt4ms3tiXbGXvejYAwBIBosAS3Um2LIssi7AdYxxjjGcQr+XfGH9/cmyWoJnBMm5AtpYXSsZA29+tj/WYe89VtJQMxIAwBICrWsu0aYieFBl/ShTEKQ0tds7eB5UbYzcBPGaB4SM1CupB/t/CbXncL95/dMchADAhDAIiKneozFQhDsJB5BNTWCaYxcSV/Iomt6hqOahk4HhKUkBYhWkrLxJ7B6sRxWooMxIAwBIDEsNhJM5oJDCJnjAHnUu13Cxsq+e1mS2E3S52QLKWF0rKQzmRPKnXKnEYGYkAYAkBUPMlWtHtGUyXNUrYaf7GJ3a3nvkrD2GFXAcoAFgisFtJtRO1eGJ/Ne1iOWyAMAWEIAFFRGYMKSJOFQQB91vhspLn8dc18O+qlIZAmcIwbS+mfiWy2/UuLU+u4iAFrUqlj7z/LcQsyEAPCEAAQhpAEhaS/dNxu+UM2S3KI93aMZ2Mw7fsMdrO4yWVL4nWt4XaPC9kspH8a3wdjwJJUat3BPCHGNyAMASAmLJkkZzRTMmR6renls549u6BoN8J7tOwWWu7LElxiJ42XXQthUAwwl7axkBaRPBNrUinLLu5G/rPEZCAGhGEAfJL0EsDPNW148Kegi46GDcIwCXLVuwHv/Wzc2P0u6U7+1fZnJ7DGWKLCMj+VLYSBr3TFXNjNYube0Aek/rOUXsluYc01vgWeY/cy6WAOaOhqZxES51eaAAAiEYYwfqby75JZGbMozGSra9ZmXBTyZz9cKR6bHhx+vplhjDWW0j7s14VxzP8ZWd/07RZabeL7wn/racsmA/GOoQDvwY4hAADEyMQFtnmEQWMTULdhI7/d7EbsvMdMaJbSTPXOv4+YLKRSN0mlTpkTyEAMCEMAAEiWa0lfXUA8loBo5gTaMR512i46djOoVO+++bi0pfRK7bKQxrTL5RtjzycKw3tRugIQhgAAAN4g94tqW+ls5EHjOeKtsZsd41YUvI+dQrZagJfMUlooTQtpZrjv+xOF8E5kIAaEIQAAgIm5E4ehljaZyX8O8MeZgTIZSmFoS2kmm4X0WfHtYBcdfYbxDQhDAACAM5k4YRWiOLQE6+cmBCnlt5sROMZPpWEspSlbSDN1n1TqLRtJD57PkIEY3oWspAAwBrC2pcG3lkFo5vpGJltx7LficBZQ4Gmta3ZukN7Yze487ZOr37IF0D+F6kyVfWYpLWSzkD7IXsZiLFgWXLoYc2v5zykXiENAGPbPZ4Vhg6g03lqGobQhDItld+eJZho9G7WzSVZvhNWyReDZ7IQsAwoafXXNuiofsJbfylcgDKOnsZR+N3z2ixtv58yzmewW0jyytp7JllSq6uC7KtWW87lH7M9EKSh4A1ZSABjLS9US5EDaQW7p+sof8tsl5QK1kIShL1juSqht5LebTcWOQgpUsllKdWb/S9lCKtkWuLusG0kGYkAYAkC0sGMIbYOizCgO1wFcby7bbuGu4zYicITmOVuylM7P6BOF0rWQzuRPKrXt+L5Lw/xHBmJAGALAKMkQhtCSJ2O/CWFnzBJslx1/Z2UQA9cKN4MrdEebLKWfTugTmdK1kMp4T8UFvpcMpdAazhgCQOjM5E8s8izOSsBhcfjZBbO+wK0aMGj07aRsLxQwbwzfvRJ1z1KgUm0ptQi4soU4TN1Cakkq1bznuhaHM6MwLOj+gDAEgLFgOQNW0UzwDoVBfA15ztAiuqYGcXspbl0bbuhKSYwVS5bSxlJaGH9nqhbSRnhNDJ8banyTgRj+AVZSAAgdS+AcSkCRDfjdWP5O7x8TdV/E29pfriMZgzB+uraUZkrbQtoIwzEsCAAgDAEgeDLZ6tOFIgyvEv3usQtDDSQMxxKQrehfyVCpmyylqVtIm/uajOA6pwonOzMgDAEAzgqcH3oKKizJbeYDtlVm+EyqJT0qw2f63nFdaDz1ZScEjsnNu+dmKV0rbQup9f0VCiShAYQhAAT/orIEzn0FFVZRNZSlk5Ie53E1QP8myIUQOddSupS/PIMUt4U0NwrjUCADMSAMASBYZsZAdKt+D80/Gj6TDdReFsvShq4VTP++Hdk1T8VZw5So1M5S2iysYCF9vbexwa4hIAwBIDiuVO8CWoRO0fO1WYTVEMLQYvNLuaRHaOfjipG2I8IwLQq1t5SWxrk7ZgtppvHYxPe51TBnrSEgKFcBAKFRynZWr+/dQqleRfft9Nw4IdLnSnhuvPZUsYj1vmy2V0Yh/3mAdvKl1r92bZlyX0qJxlL63fDZu735z0fMFlLJtvDzTf0v1FkEay5s4whDAIAAaHYKrSutQwQWVYtrW/d0TTONK3PrEFiEWF9C3lLX7NuAwdknQ99GGKZDJXvh+zvj78wVr4XUklTq2c0DuwGu7S/D/LRWuonKkgcrKQCE8jKtWojCh4GC042kH8bgvy+sAiLVYN66Q1f1dC2WvrEeqK0s34vdLD0K2Syl1rk75kUq6/geQng9yX9OngzECEMAgMFfpJXspR62GtaGZAmep+pnx2chWxKTB6V7vrCUf4fusadryY3XMlT22J3q3cougl+IhzZZSo8Ru4V0ZpiPnzXcwk8zH1oWAgBhCADQK5kLgL/IXgT4WfVq5pA2l3t3HT4OpXHvkjbZ/8pE+1gu25mnvtrHIqiGDsrWxnal4H1aVLJnKT3W/2O2KFrG7v3AbVDKv/tLBmKEIQBAL1y5F86T6oQGbQvCrzR8Lb6d7Cu+1QUD6LXsSXpSPF+4kvTVuNjQR/vk8tc1+6HhLb9WuxmBY3oUOt1S+qi4F6islvUigGu1Lv4AwhAA4GJisFRtZ/x6giCUpI8BBRZr2XYNJy7QXnTcnvey18FLzfY3c+LqS4tn2ccKfmG8lhAo6VdwgJ1OO38Wu4W0GQ+WpFKbQMa37/3VZCAGhCEAwMks3MukcC+fJ0n/c2LwVnbLaMiisAmQCuNnp06oFDp/93Dp2vTG+PlHpbFbOHOB572kv2VPYrTtSYxl8u8WbgPq46Wwm8FhntS+lEqhuM84W5NKhTK+d8b3AuM7QShXAQBWqiMvxfmFvrM5U1gF2B5rd20WETJRfeZw5YKDRjRbRc/SvaTnLdtubC/2zCi4Z3rNjLk4Y8EhF7uFx4JYX+mKldI9v5oyhZuTLPPRY4B9u2ty2ZJKVYE9Q5/r5DZgUd9XW5aBzHF9OVtKhCHEEigOEcilxnXP3/foXribgNtk6a7PKkwmqmt93e3d4+6ASJzt/UxPvLbQ2+69PtZXP/vcU3CRyVbXLDSBtTYIw7koeJ8qufw18VKwkEphl6B5j417/1wb7i1E23hf74lQ5rZ5X/eLMAQCRYRhaDTpvMfwDHZ7gfHkxP4t2a2hVj4q7YL2PvosIB9yXTNf3/4m/67CCmGYJI2l9JPnPbpJQCBbbOIhzsdrQ3yVu+dIwftE4IwhAIQWsC9GJsyfnDh8DuR6Pgt73zH+VH+7GDOj6A/Vame5rhtR8D5VCtWZdA+RgoVUxndVqO+ze/nPEk9EoimEIQDAAILw3xqn/XFfHG4Hvo6PYrf7PZ5d+/QZ5BTGvr8LuF8/dnSfECf5O2MtT+DeM40rqdQhKF0BCEMACIKt6t2tMQvCt0H0QtLDQG35u9gpfI9H92z6bJ+ZbCVFQhdVljZbioL3qXIoS2mh+C2k1rFbjmB8+9wuZCBGGAIAXIQfqq18v7vAObYAoqnz9VH97R7+6UTPE93rJx4kfVC9st93P8uN1xd6/y+F3Qz8AqmxlKZiIc1kSyoVeltYS1cwvhGGAABni8AH1avJHyT95gTMKgERU7p7/eNCAvFZr/bblUgM0LTJoxPKH13bDFXqxFrXbD2i/kzgCMfIlY6F1Nrfy5HMzYXhM00GYogcspICQPMCOyWA3ujnHY+K5pRcQLDWa73DpWxnUo7xoHp1936EYvDJLRBcop1DXGhYGj4zlrGyNl7r1YX75UpYVkNtk8ZKv+np+3xzyaaHMbE2tMkY2Bjn5k1ifbqvez41/rrI/f7y8vJyiV+cy79qVGrc52EWhkkhlHtcu+v1DcS+JzFLPxmKjHgDLsTMjceFe/ktPKJ748YmVlEAAAC4GP8HBN10pNUq4sYAAAAASUVORK5CYII='
                                                                                        alt='The Dubai Mall' height='18'
                                                                                        width='230' style='
                                                display: block;
                                                padding: 0px;
                                                text-align: center;
                                                width: 230px;
                                                height: 18px;
                                                border: 0px;
                                              ' />
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table cellpadding='0' cellspacing='0' width='100%' role='presentation'
                                                    style='min-width: 100%'>
                                                    <tbody>
                                                        <tr>
                                                            <td style='padding: 0px 15px'>
                                                                <table cellpadding='0' cellspacing='0' width='100%'
                                                                    role='presentation' style='
                                      background-color: transparent;
                                      min-width: 100%;
                                    '>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style='padding: 35px 15px 30px'>
                                                                                <table cellspacing='0' cellpadding='0'
                                                                                    style='width: 100%'>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <table cellspacing='0'
                                                                                                    cellpadding='0'
                                                                                                    style='width: 100%'>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td valign='top'
                                                                                                                style='
                                                            width: 100%;
                                                            padding-bottom: 0px;
                                                          '>
                                                                                                                <table
                                                                                                                    cellpadding='0'
                                                                                                                    cellspacing='0'
                                                                                                                    width='100%'
                                                                                                                    role='presentation'
                                                                                                                    style='
                                                              background-color: transparent;
                                                              min-width: 100%;
                                                            '>
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td style='
                                                                    padding: 0px
                                                                      15px 25px;
                                                                  '>
                                                                                                                                <h2 style='
                                                                      font-family: Arial,
                                                                        helvetica,
                                                                        sans-serif;
                                                                      font-size: 22px;
                                                                      font-style: normal;
                                                                      font-weight: bold;
                                                                      line-height: 32px;
                                                                      text-align: center;
                                                                      color: #000000;
                                                                      padding: 0px;
                                                                      margin: 0px;
                                                                      letter-spacing: 1px;
                                                                      text-transform: uppercase;
                                                                    '>LAST CALL
                                                                                                                                    TO
                                                                                                                                    WIN
                                                                                                                                    AED
                                                                                                                                    50K
                                                                                                                                    EMAAR
                                                                                                                                    GIFT&nbsp;CARD
                                                                                                                                </h2>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <table cellspacing='0'
                                                                                                    cellpadding='0'
                                                                                                    style='width: 100%'>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td valign='top'
                                                                                                                style='
                                                            width: 100%;
                                                            padding-top: 0px;
                                                          '>
                                                                                                                <table
                                                                                                                    cellpadding='0'
                                                                                                                    cellspacing='0'
                                                                                                                    width='100%'
                                                                                                                    role='presentation'
                                                                                                                    style='
                                                              min-width: 100%;
                                                            '>
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td style='
                                                                    padding: 0px
                                                                      20px;
                                                                  '>
                                                                                                                                <table
                                                                                                                                    cellpadding='0'
                                                                                                                                    cellspacing='0'
                                                                                                                                    width='100%'
                                                                                                                                    role='presentation'
                                                                                                                                    style='
                                                                      background-color: transparent;
                                                                      min-width: 100%;
                                                                    '>
                                                                                                                                    <tbody>
                                                                                                                                        <tr>
                                                                                                                                            <td style='
                                                                            padding: 0px
                                                                              10px;
                                                                          '>
                                                                                                                                                <div style='
                                                                              text-align: center;
                                                                            '><span style='
                                                                                font-size: 15px;
                                                                                font-family: Arial,
                                                                                  sans-serif;
                                                                                line-height: 24px;
                                                                                letter-spacing: 0.5px;
                                                                              '> The Dubai Mall is celebrating Europe’s biggest football tournament by giving
                                                                                                                                                        a
                                                                                                                                                        lucky
                                                                                                                                                        fan
                                                                                                                                                        the
                                                                                                                                                        chance
                                                                                                                                                        to
                                                                                                                                                        win
                                                                                                                                                        an
                                                                                                                                                        Emaar
                                                                                                                                                        Gift
                                                                                                                                                        Card
                                                                                                                                                        worth
                                                                                                                                                        AED
                                                                                                                                                        50K.<br /><br />
                                                                                                                                                    </span>
                                                                                                                                                </div>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding='0' cellspacing='0' width='100%' role='presentation'
                                                    style='min-width: 100%'>
                                                    <tbody>
                                                        <tr>
                                                            <td style='padding: 0px 15px'>
                                                                <table cellpadding='0' cellspacing='0' width='100%'
                                                                    role='presentation' style='
                                      background-color: transparent;
                                      min-width: 100%;
                                    '>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style='padding: 0px 15px 30px'>
                                                                                <table align='center' border='0'
                                                                                    cellpadding='0' cellspacing='0'
                                                                                    width='40%'>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align='center'
                                                                                                bgcolor='#000000'
                                                                                                height='50' style='
                                                    background-color: #000000;
                                                    text-transform: uppercase;
                                                  ' valign='middle'><a href='https://www.dubaiopera.com/events/the-sound-of-hollywood/?utm_source=salesforce%e2%80%8b%e2%80%8b&utm_medium=email%e2%80%8b%e2%80%8b&utm_campaign=20210707_EMG_TDM_REASONS_TO_VISIT'
                                                                                                    style='
                                                      display: block;
                                                      padding-top: 10px;
                                                      padding-bottom: 10px;
                                                      padding-left: 10px;
                                                      padding-right: 10px;
                                                      background-color: #000000;
                                                      color: #ffffff !important;
                                                      font-size: 16px;
                                                      line-height: 20px;
                                                      letter-spacing: 1px;
                                                      text-transform: uppercase;
                                                      text-align: center;
                                                      text-decoration: none !important;
                                                      font-family: Arial, sans-serif;
                                                    ' title='Download App' target='_blank'>
                                                                                                    <font
                                                                                                        color='#ffffff'>
                                                                                                        BOOK NOW</font>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--  -->
                                                <table cellpadding='0' cellspacing='0' width='100%' role='presentation'
                                                    style='background-color: #000000; min-width: 100%'>
                                                    <tbody>
                                                        <tr>
                                                            <td style='padding: 20px 15px'>
                                                                <table cellspacing='0' cellpadding='0'
                                                                    style='width: 100%'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <table cellspacing='0' cellpadding='0'
                                                                                    style='width: 100%'>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td valign='top' style='
                                                    width: 100%;
                                                    padding-bottom: 0px;
                                                  '>
                                                                                                <table cellpadding='0'
                                                                                                    cellspacing='0'
                                                                                                    width='100%'
                                                                                                    role='presentation'
                                                                                                    style='
                                                      background-color: transparent;
                                                      min-width: 100%;
                                                    '>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td style='
                                                            padding: 0px 0px
                                                              20px;
                                                          '>
                                                                                                                <h2 style='
                                                              font-family: Arial,
                                                                helvetica,
                                                                sans-serif;
                                                              font-size: 22px;
                                                              font-style: normal;
                                                              font-weight: bold;
                                                              line-height: 1;
                                                              text-align: center;
                                                              padding: 0px;
                                                              margin: 0px;
                                                            '><span style='
                                                                font-size: 16px;
                                                              '><span style='
                                                                  font-family: Arial,
                                                                    Geneva,
                                                                    sans-serif;
                                                                '><span style='
                                                                    color: #ffffff;
                                                                    text-decoration: none;
                                                                  '><a href='https://www.dubaiopera.com/events/the-sound-of-hollywood/?utm_source=salesforce%e2%80%8b%e2%80%8b&utm_medium=email%e2%80%8b%e2%80%8b&utm_campaign=20210707_EMG_TDM_REASONS_TO_VISIT'
                                                                                                                                    style='
                                                                      color: #ffffff;
                                                                      text-decoration: none;
                                                                    ' title='THEDUBAIMALL.COM' target='_blank'><span style='
                                                                        color: #ffffff;
                                                                        text-decoration: none;
                                                                      '>THEDUBAIMALL.COM</span>
                                                                                                                                </a>
                                                                                                                            </span>
                                                                                                                        </span>
                                                                                                                    </span>
                                                                                                                </h2>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <table cellspacing='0' cellpadding='0'
                                                                                    style='width: 100%'>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td valign='top' style='
                                                    width: 100%;
                                                    padding-top: 0px;
                                                  '>
                                                                                                <table cellpadding='0'
                                                                                                    cellspacing='0'
                                                                                                    width='100%'
                                                                                                    role='presentation'
                                                                                                    style='
                                                      background-color: transparent;
                                                      min-width: 100%;
                                                    '>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td style='
                                                            padding: 15px 0px
                                                              10px;
                                                          '>
                                                                                                                <table
                                                                                                                    align='center'
                                                                                                                    border='0'
                                                                                                                    cellpadding='0'
                                                                                                                    cellspacing='0'
                                                                                                                    class='
                                                              m_-2432252401453296951container
                                                            ' width='540'>
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td align='center'
                                                                                                                                bgcolor='#000000'
                                                                                                                                style='
                                                                    font-family: Arial,
                                                                      helvetica,
                                                                      sans-serif;
                                                                    font-size: 11px;
                                                                    color: #ffffff;
                                                                    line-height: 16px;
                                                                    font-weight: normal;
                                                                    letter-spacing: 0.25px;
                                                                    text-align: center;
                                                                    padding: 0
                                                                      25px 10px
                                                                      25px;
                                                                  ' valign='top'><span>This email
                                                                                                                                    was
                                                                                                                                    sent
                                                                                                                                    by&nbsp;Emaar
                                                                                                                                    Malls
                                                                                                                                    PJSC,<br />P.O.Box
                                                                                                                                    191741,
                                                                                                                                    Dubai,
                                                                                                                                    United
                                                                                                                                    Arab
                                                                                                                                    Emirates<br /><br />
                                                                                                                                </span>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaypalBRealTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'en', // en or ar
                'title' => 'you have a new message in the message center',
                'description' => 'please go to the Message Center and end this conversation',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'trusted sender',
                'short_reason'=>'trusted sender',
                'sender' => 'security@paypal.com',
                'template'=> "<!DOCTYPE html>
<html dir='ltr'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>You have a new message</title>
</head>

<body style='font-family: PayPal-Sans, sans-serif'>
<div style='max-width: 100%;'>
    <div dir='ltr' width='660px' align='center'>
        <table class='marginFix' style='font-size: inherit' border='0' width='660px' cellspacing='0' cellpadding='0'
            align='center'>
            <tbody>
                <tr width='660px' align='center'>
                    <td class='mobMargin' style='font-size: 0px' bgcolor='#ffffff'>
                        &nbsp;
                    </td>
                    <td class='mobContent' align='center' bgcolor='#ffffff' width='660px'>
                        <table dir='ltr' border='0' width='660px' cellspacing='0' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table border='0' width='660px' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td class='greetingText' colspan='3' align='center' width='600px'>
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='mobMargin'>&nbsp;</td>
                                                    <td align='center' width='600px'>
                                                        <img style='display: block' title='PayPal'
                                                            src='data:image/png;base64,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'
                                                            alt='PayPal' width='116px' height='71px' border='0' />
                                                    </td>
                                                    <td class='mobMargin'>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class='mobMargin' style='width: 30px' align='center'
                                                        valign='top' bgcolor='#004f9b' width='30px'>
                                                    </td>
                                                    <td align='center' width='600px'>
                                                        <table border='0' width='600px' cellspacing='0' cellpadding='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td align='center' valign='top' width='12px'>
                                                                        <img style='display: block'
                                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAABRCAMAAADRu7f8AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACFlBMVEUrUIM8TGtBS2xBSWtBRl/5+////f///P//+v9FRVX++///+///+f4uSmM4SFdBSFH7/f///v///f3/+vwmTWc6SFM7SE8/Sk/5/v///////v3//PoeTnkyS1c7SUc9SEtBSU3///3//fw1SWlCSkVBSklFS039//8tT2pDSFZLRVBLRkxDSkpETU37//7///45UF9MSU1RRk9PSE1HTE1GUE35//w7TnVGTV1NTE9OTUlNTklKTk1KUk/7//wIWJ8KWZ4JW6EIWqAUU5IgUIsjUYYnUYUqUoQFVpEhTYAzSnU4S24AXJUKVocuSnAAXZUDWYkYUnczSGEAYJ0AX5MDV5EAXZcAWokDWI0OU4sAYZYGW44iT30AZJ0FXY0HXpcXWYU1T4EETZQETJYETJgES5oES5wCTZYCTZgCTJoCTJwBTZgBTZoATpoATpgATpwAT5oAT5gAT5YAUJgAUZkATZwAUJsAUpoAT5sAUZwBUJwBUp0AUpwDUZ0AU50CU54BVJ4AVJ0AVp4AVZ4AVp8AV58AWKEAWaECVZ8AWZ8AWp8AWJ0AW50AWp0AXJ4AXpwAWJ8AWqEAW58AXKAAXaAAX58AXp4AVqEAV6MAWaUAW6YAXacAXqcAX6oAXqkAV6EDV58HV54AVp0AWJsAV5sAWZkAW5sDVZ0AWpkAW5cIVJcCVpkAXZkOUZEDVpULVI0AW4////9VP3WIAAAAYnRSTlMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADsvYE95qZaHgTFayACtU8MtEcGAcRO5WoLpSDsWgK9HoEEPnB4bjsAAAABYktHRBnsbrWIAAAAB3RJTUUH5QcZBxIWnAM3kwAAAXFJREFUOMu1zGVTAlEYhuFjYQcm2N2K3d3d3QrY2MESBrIi2Ind3T/Rd9kdZ1YHRj54f3qumfcc1ANxuTwen9/bi3SC+40+qB8aGBgcpGOIahiiQ0A1AtExCo1B4+MTE79BcBLShqkpOqYhgWAG0o7ZWQpCEsOahCAMo0NIhWE/QfxDTJFILKZDIpEQF5hUSkLyC2Lx3zFHNQ/piwXoP7FIpQ9k0BIkh/SDTKYLOE6HnGoZ0gaFgo4VTfqBeo8vK5QqEji+qlSp1hC5lesbG5ubJLa2d3b39g80UB8eHZ+cnp0TwC8uLq8ys7JzkFp+faO8zc3LLyhECPbdfVFxSamBoRF6uH18KiuvMDZhmJqh55fXyqrqGnMLhqUVenuvrau2trG1Y9o7oI/6hkZHJ2cXFtvVDX02Nbt7eHp5s9g+vqiltc3PxT8gkBXE9EXtHcEhoWHhEZFsjivq7IqKjomNi0/gALoTk5JTUtPSMzgcny8O7LQ8BouPXQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0wNy0yNVQwNzoxODoyMCswMDowMBLgWrkAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMDctMjVUMDc6MTg6MjArMDA6MDBjveIFAAAAAElFTkSuQmCC'
                                                                            alt='' width='12px' height='81px'
                                                                            border='0' />
                                                                    </td>
                                                                    <td align='center' valign='top' width='229px'>
                                                                        <img style='display: block'
                                                                            src='data:image/png;base64,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'
                                                                            alt='' width='229px' height='81px'
                                                                            border='0' />
                                                                    </td>
                                                                    <td align='center' valign='top' width='118px'>
                                                                        <img style='display: block'
                                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHQAAABRCAMAAAA0JXKQAAAA1VBMVEX///8AerQpncj///8AebSu1+kAibwAiL0Ae7QAe7WMx+GMx+AAfLbQ6PIZmscAfLWJxuCJxeDJ5PAAk8Po9PkxocpZsNROrNEAfbZ/wd2/4O7A4O5/wt1PrtJQrtIvosvg8Pfh8fcAfrcAjcDE4u8Ajb+DxN8XncjQ6fIAf7iNyeIAi76s1+oin8rH5PAkoMo1pc3F4++k1OgAhruBw98AjsBdtNax2uv6/P7A4e5/wt4HmsdouNiq1unp9PkAjL8uo8yMyOGv2evI5PDe7/bu9/r2+vzuabZPAAAAAXRSTlMAQObYZgAAAAFvck5UAc+id5oAAAABc1JHQgCuzhzpAAABiElEQVRo3u3SaVbCMBSG4QKioIUqgwZQwYiUAiJlcKLMw/6XZIcAwdY2pYm/7ruA7zn3JFKMFE8IL24yZ1bSDo0lRZvJnUSh56LRiz3loCmz9KVY8ypGoZZnJ2dEmhk5bUoETR/KikSzjmHDNKpcizNvKCdFUMUpJ8rMKQqlSnvQKl8QYxbyzv4OVY4qikGLFOFCZflWhHl3fJkiHTxkV+JvlpAsu1HiOZV5m2UyfIClI9Cuwtes0NsOLCF3ZRF30rAXiu55vqdHnih64GU+InYUVWs8yKcqYkax2XM9ull/QSwopmpENRtkyA/Fv1ObUcimSm95odgzrXW62dJcczSKfWp3TiM77T8GCYr9e+2GJ7tvvpPBKMY9PRyp9wIng1HzR/XZyb7KMMiCYjwYMp2rDwdMc2yo2ej949NX/PoesW4xo1ZjYzL18qYTY6yF2AmFWs3mxmK5Wm+2icR2s14tF8Z8FnYjNMojQAEFFFBAAQUUUEABBRRQQAEFFFBAI6EQBEHQv/cDH1gG6/RtkEEAAAAASUVORK5CYII='
                                                                            alt='' width='118px' height='81px'
                                                                            border='0' />
                                                                    </td>
                                                                    <td align='center' valign='top' width='229px'>
                                                                        <img style='display: block'
                                                                            src='data:image/png;base64,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'
                                                                            alt='' width='229px' height='81px'
                                                                            border='0' />
                                                                    </td>
                                                                    <td align='center' valign='top' width='12px'>
                                                                        <img style='display: block'
                                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAABRCAMAAADRu7f8AAAAulBMVEX///8AWKAAWKAAWKAAV58AWKAAWKAAWJ8AV58AV58AWKAAV58AV58AV58AV58AV58AV58AV58AV58AV58AVp8AV58AV58AVp8AV58AVp8AVp8AV58AVp8AVp4AVp8AVp8AV58AVp8AV58AVp8AV58ATJgAS5gAS5cASpcASZcASZYATZkATZoATpoAT5oAT5sAUJsAUZsAUZwAUpwAUp0AU50AVJ0AVJ4AVZ4AVp4AVp8AV58AWKAAWJ8JbgC6AAAAJXRSTlMAPYG97AQeWqXmAiBrxQxPtQEGR7QFTMEKZNwcmP1Q6hq8A4E+ko5UgwAAAAFvck5UAc+id5oAAAABc1JHQgCuzhzpAAABEklEQVQ4T13O13bCMBBF0Zvee+/VEEJzTCC2Sf7/tzJNmgG/7XWuLKEoOp1u94O+3icKkaCnMDGy0FfJMYUdQ98Si+Bi5GMZLEEaKkwGFQYRwyAMgwjDBeTEyMKIpehjxLKEcZBBhxiHhDIIZelDgkuQhvhSSRLYcIDKEguVKkKFiSUWo0oJk5AESQQf4lukCVNNIkxVcpnCRPAhIw8xCwmzrAS7DD+eKkYW6pAESagt8T8IPnSQ0ISUIEIbkqLWhDYkzNsmi+AJ86BluBbxG7SEIMIfSx6FldW19ZSAjc2t7R19FOjb3ds/kMQADo+OOSlOTs/O2wTg4vKqaRJwfXPrwN39gwOPTwHPLwGvbwF4/wdM96QyzoWsMgAAAABJRU5ErkJggg=='
                                                                            alt='' width='12px' height='81px'
                                                                            border='0' />
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td class='mobMargin' style='width: 30px' align='center'
                                                        valign='top' bgcolor='#004f9b' width='30px'>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table dir='ltr' style='height: 279px; width: 660px' border='0' width='660px' cellspacing='0'
                            cellpadding='0'>
                            <tbody>
                                <tr style='height: 259px'>
                                    <td class='mobMargin' style='width: 30px; height: 259px' align='left' valign='top'
                                        width='30px'>
                                        <table border='0' width='30px' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td align='center' valign='top' bgcolor='#004f9b'>
                                                        <img class='imgWidth' style='display: block'
                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAABgCAMAAAA9xjIhAAAAe1BMVEUAT5oBUJsCUZwAUpwAUZsAUpsAU5wAVJ0AVZ4AVp8BV6ABU50CWKEAWKABWaEAV58AWqEAW6ECVJ4BVZ4AWaAAW6IAXKICWqIBXKMAXaMAVp4CVp8DW6MBXqQAXqQCXaQCX6UBX6UAYKUCYKYAYaYAX6MAYaUBYKQAYKTXq3gLAAAAAW9yTlQBz6J3mgAAAAFzUkdCAK7OHOkAAAEHSURBVEjH3dVBe4IwDIDhslahaks3rLS4MsFt+v9/oUlaxtxh9/a7vg8HQ4iMMVZVL5wLsdlua6pppJQ7ihXLFSXEfr9YQ3agcmcBXD+xOmiMgXAeH6VxyLZVSmujDZZ4nVZLjPQKZcwcf/VbBzWUoo5Ha09Q7rzqX67XNcCBYFr31jrnoV88FMddd6YFR8D6/t25Mnj9cCMv6lnagoF2AIL9p5mEEMZxTDwMSRN7T5o5w5mj1UfAnPsI4XKZoNIY3ibpxKSMu6DjATc+BTbP8z88Z8/wl4fbT/uN208zuV4/odyZ1CzHbAzTD6t0322876ev1DfFnq9/QRwvnTHpzvnbPVY4PwCfe8RS7S6miAAAAABJRU5ErkJggg=='
                                                            alt='' width='30px' height='96px' border='0' />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td style='height: 259px' align='center' valign='top' width='600px'>
                                        <br />
                                        <table style='
                          padding: 0px 20px 30px 20px;
                          word-break: break-word;
                        ' border='0' width='600px' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td align='center'>
                                                        <p dir='ltr' style='
                                  font-size: 32px;
                                  line-height: 40px;
                                  color: #000;
                                  margin: 0;
                                '>
                                                            See your message in the Message Center
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table border='0' width='600px' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td style='padding: 0px 20px 20px 20px'>
                                                        <p dir='ltr' style='
                                  font-size: 16px;
                                  line-height: 24px;
                                  color: #2c2e2f;
                                  margin: 0;
                                  word-break: break-word;
                                '>
                                                            If your question has already been answered, please go to the
                                                            Message Center and end this
                                                            conversation. Otherwise, this
                                                            conversation will expire in 24 hours.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class='neptuneButtonwhite' border='0' width='600px' cellspacing='0'
                                            cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td style='padding: 0px 30px 30px 30px' align='center'>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='
                                        line-height: 1.6;
                                        font-size: 15px;
                                        border-radius: 1.5rem;
                                        padding: 10px;
                                        display: inline-block;
                                        border-style: solid;
                                        border-color: #0070ba;
                                        font-weight: 500;
                                        text-align: center;
                                        cursor: pointer;
                                        background-color: #0070ba;
                                        width: 200px;
                                      '>
                                                                        <a style='
                                          color: #ffffff;
                                          text-decoration: none;
                                        ' href='https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fsmc%2Fcustomer'
                                                                            target='_blank' rel='noopener'>Go to the
                                                                            Message Center</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class='mobMargin' style='width: 30px; height: 259px' align='left' valign='top'>
                                        <!--  -->
                                        <table border='0' width='30px' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td align='center' valign='top' bgcolor='#004f9b'>
                                                        <img class='imgWidth' style='display: block'
                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAABgCAMAAAA9xjIhAAAAaVBMVEUAVp8AVZ4AVJ0BU50AUpwAUZsAUJoAT5oATpkBV6ABVZ4BUJsBT5oBWaEAWKAAV58CVp8AU5wAUpsCWqIDV6AAW6IAWqEAWaABXKMCWKEAXKIBXqQAXaMCVJ4BX6UAXqQAX6QAYaYAYKUEen2IAAAAAW9yTlQBz6J3mgAAAAFzUkdCAK7OHOkAAADJSURBVEjH7ZTLEoIwDEWDtlZaW6nIQ0Eq/P9HmkRgdMZxb8azPXd15yYAAFm2IbaMUkrrnTF7BsTqPM8xYO2iNeOcMQdErvbeh3CkdgrKEDGenhHn5OqyLDGA5eTnAgMEBmgTYjUGNFRVVdcNNsPVANiZiKj4Vcdf1m3bYgBH4S90EFAU6ywQufrKYDkVzSKE93cgV3dd1/cftLU3RK4ehiGlnqBZ1PXyBjOO/LU0fWdSus40zPoGxepxHKcJdUp0DvwIXt+/VP0AE0uZAnyeLMIAAAAASUVORK5CYII='
                                                            width='30px' height='96px' border='0' />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <!--  -->
                                </tr>
                                <tr style='height: 20px'>
                                    <td class='mobMargin' style='height: 20px'>&nbsp;</td>
                                    <td style='height: 20px' align='center' width='600px'>
                                        <table dir='ltr' style='height: 10px; width: 600px' border='0' width='600px'
                                            cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr style='height: 10px'>
                                                    <td style='height: 10px'>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class='mobMargin' style='height: 20px'>&nbsp;</td>
                                </tr>
                                <!--  -->
                                <!--  -->
                            </tbody>
                        </table>
                        <table border='0' width='600px' cellspacing='0' cellpadding='0' align='center'
                            style='width: 600px;'>
                            <tbody width='600px' style='margin: auto; width: 600px;'>
                                <tr width='600px' style='margin: auto; width: 600px;'>
                                    <td style='font-size: 13px;
                                line-height: 20px;
                                color: #687173;
                                padding: 10px 30px 10px 30px;
                                margin: auto; width: 600px;' width='600px'>
                                        <p dir='ltr' width='600px' style='margin: auto; width: 600px;'>
                                            Copyright © {year} PayPal. All rights reserved.
                                            <br> <br>
                                            Consumer advisory – PayPal Pte. Ltd., the holder of PayPal's stored value
                                            facility, does not
                                            require the approval of the
                                            Monetary Authority of Singapore. Users are advised to read the terms and
                                            conditions carefully.
                                            <br> <br>
                                            PayPal RT000093:en_US(en-EG):1.0.0:d27e655725f1b
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class='mobMargin' style='font-size: 0px' bgcolor='#ffffff'>
                        &nbsp;
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}

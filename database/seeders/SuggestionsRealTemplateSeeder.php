<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuggestionsRealTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'ar',
                'title' => 'ﻫﻨﺎﻙ ﺍﻗﺘﺮﺍﺣﺎﺕ ﺟﺪﻳﺪﺓ ﻟﺤﺴﺎﺑﻚ ﻓﻲ ﺃﺩﺍﺓ ﺇﺩﺍﺭﺓ ﺇﻋﺪﺍﺩﺍﺕ ﺍﻟﺨﺼﻮﺻﻴﺔ',
                'description' => 'ﻟﻘﺪ ﺃﺿﻔﻨﺎ ﺍﻗﺘﺮﺍﺣﺎﺕ ﻣﺨﺼّﺼﺔ ﻟﻚ ﺇﻟﻰ ﺃﺩﺍﺓ ﺇﺩﺍﺭﺓ ﺇﻋﺪﺍﺩﺍﺕ ﺍﻟﺨﺼﻮﺻﻴﺔ',
                'game_id' => 1,
                'attachment_type_id' => null,
                'is_phishing'=> 0,
                'reason'=>'الايميل سليم ولا يحتوى على أى لينكات مشبوهة',
                'short_reason'=>'الايميل سليم ولا يحتوى على أى لينكات مشبوهة',
                'sender' => 'security@google.com',
                'template'=> "<!DOCTYPE html>
<html lang='ar'>

<head>
    <meta http-equiv='Content-Type' content='text/html' ; charset='utf-8' /> 
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ﻫﻨﺎﻙ ﺍﻗﺘﺮﺍﺣﺎﺕ ﺟﺪﻳﺪﺓ ﻟﺤﺴﺎﺑﻚ ﻓﻲ ﺃﺩﺍﺓ ﺇﺩﺍﺭﺓ ﺇﻋﺪﺍﺩﺍﺕ ﺍﻟﺨﺼﻮﺻﻴﺔ</title>
</head>

<body style='margin: 0 auto; padding:0px;' bgcolor='#FFFFFF'>
<div style='max-width: 100%;'>
    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='850' align='center'>
        <tr>
            <td align='center' bgcolor='#FFFFFF' style='padding: 10px 0;'>
                <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='850' align='center'
                    style='max-width: 850px; width: 100%; border: 1px solid #e0e0e0;'>
                    <!--<![endif]-->
                    <tr>
                        <td align='center'>
                            <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='850'
                                align='center'>
                                <!-- logo header starts -->
                                <tr>
                                    <td align='center' bgcolor='#FFFFFF' style='border-bottom: 1px solid #e0e0e0;'>
                                        <table dir='rtl' role='presentation' border='0' cellspacing='0' cellpadding='0'
                                            width='100%'>
                                            <tr>
                                                <td dir='ltr' aria-hidden='true' align='right'
                                                    style='padding: 17px 86px 18px 0px;'><img
                                                        src='data:image/png;base64,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'
                                                        width='auto' height='22'
                                                        style='display: block; width: auto; height: 22px;'>
                                                </td>
                                                <td dir='rtl' align='left' valign='middle'
                                                    style='font-family: Noto Naskh Arabic, Al Nile, sans-serif; font-size: 12px; line-height: 18px; color: #1967D2; padding: 17px 0px 18px 86px;'>
                                                    <a href='https://myaccount.google.com/' target='_blank' dir='rtl'
                                                        style='text-decoration: none; color: #1967D2;'>ﺗﺴﺠﻴﻞ ﺍﻟﺪﺧﻮﻝ</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align='center' bgcolor='#FFFFFF'>
                            <table dir='rtl' role='presentation' border='0' cellspacing='0' cellpadding='0' width='850'>
                                <tr>
                                    <td align='center'>
                                        <table role='presentation' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td align='center' style='padding: 38px 0px 41px 0px;'>
                                                    <table role='presentation' border='0' cellspacing='0'
                                                        cellpadding='0' width='100%' style='max-width: 600px;'>
                                                        <tr>
                                                            <td dir='ltr' align='center'><img
                                                                    src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH4AAACCCAYAAACAc3zqAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAfqADAAQAAAABAAAAggAAAACtUqoaAAAWUklEQVR4Ae1dC3QUVZr+b3WnO/0gIQkkvAxIAF8o8hLBJUCCMODi4OxBd113zuw4q+sZxqPrqgm7zjp6IIzOqOscd0fPziyzszuu6JoRV1AgqCAyKwwPURRIIAkE8iCBpJ9Juvvu/3do7CTdpKr6VnVVyD0n6erqe//XV/f133v/YmDSxDlnS57zz4yE4S4O/DsM/zFgb0sSVG4td/3RpGrpJjbTjZMARk9/yK27Pw0u4CyykvMo4GMTkcUH4BQwXsmYpTKnKHPXm3ezcKJ8V/I9wwO/4lXu9LUFlrIIX8kZXwEccpQAxhi0cmCbAFuCwgLntg1/zYJKyg/WvIYEvnQdzwPw/SkAW8kBlgLnDhEAMMZ8SGcL41IlWDLf217G2kXQNSMNwwC/eH2gEML829iM34WAF2MfbtHUoIx147hgBzCotFv5O5ufcDdqys9gxNMKfOm6zus5C92FzTf+8Zlpsw2joSHskXBcYGHW339QnlmdNll0Yqwr8DQSX1wRuBV1Wwk8gqNxmKyTnorY4LjgMLY6lZKVV257wn1QUWGTZNYc+FUbue38Cd8iCLOVEUaA81EmsU2PmIzVRmcI3FI5vzxz99OMRUwlfxJhNQF+1Svc3doRWIa1eiUyuAOnXtlJ+JvrNoMWxtk7Eo4LrG5n1ZaHWae5FPhGWmHAL1vHR3aB/85of81gMTbr9m/YDMIrBh403mZgUqVLcmze9CTzmEnLlIBf8nzg6kgXza9xJM7ZbThCksykvChZcZrYieOVKpohWK3OTVsfZ82iaGtFRzHwS9d7p3Vzhn11dCQ+TSvBzEoXvYYRHBPsJl+BVWKV75c7ao2oy4DAP825tKsieBtAGMFm5Be/2oiKGFUmfBAOUkvAJGvl9jI7zhaMkRICv+xlbu/2+xfzMI7CGb8TB2f5xhDX7FKwGmAMWwKo/OBJxx7sIrCHSE+6BDyCnRXyBe4Ic04OlWUA3J0eka4Qrow1ovHfYRKvnJjj2vHag6xbT81Z6Trfg9H+GmARNuM2PZkP8eqxADqM2rHqv8dAqqxa43xLD7tYcdr1Sz0YDfFIboGLfo57OUTuxVyXWuHkJVL/5YqcfqVuNvNTGALe/Biq0mAIeFVmM3+hIeDNj6EqDYaAV2U28xcaAt78GKrSYAh4VWYzf6Eh4M2PoSoNhoBXZTbzF7KaVYVwOAT0F4lE8C8UVUOSrCDhURqLxRr9M6tueshtfODRid3Z5QOf3wsBnxe6Ov3Q1d0ZBf1yBiLwbRl2sNmd4HC5weV0g93m0skhejnJjPGbIYHH9QPw+Tqgo6MVPB1tA4KcyJTUGgToL+iD9vaWaBZ6GIZl5UJWVh64XFm4QqqLWzyReGm/ZyjgQ6FuON/WFP0LhcWvUtLDcOF8c/TPYs2A3JwCyMktACteX2nJEMCHurugueU0tF9owd3X+uxNCOND1oI8z51rgOzhIyF/5DiwZlw5q9JpBT6CZ5xbz52B1taz0UFaOmodPWjUCnS0n4O8vNGQN2IMDhC1Pb2VDj378kwb8D5/B5w5XQPdOFAzQqLZQUtLA1y4cA7GjCvCwWCWEcTSTAbdgaca1tx0Cmv5Gc2USoUwPYh1tUcgL3cM5BdcNWgHgLoCTwO20/XHwO83+NkDHGbQgxkIeGBc4RSwWgbf4E83z10nzr9PnvjC+KDHNRf0gJLMJPtgS7oAHwz6ofbkEejuMkZ/rgREkplkJx0GU9IceKot9bVfqXLCGMXQNP8nHQZTzde0j4/Wlijo4p0xN4x3Q+m0ETChwAH5w3vm380XuqC2KQBVh87Bl3Veoc8NjU9qUZeJE6dCBrqCzZ40A57j9KgeB3LkKBGV8Hgy3F08Gh5deTUU5icPi1N+TxHUNwfgxd+fhI070UcgyCdEutTXHUPwb8BDspo3lqLMlpCOZtI3NNRg00ixhsSkotFO2L5uDrz4wPWXBT3GjR4MyktlJo5K/pDE8sv9JJ1IN7MnTYCPesJwgUVUmj81BzY/MxuuK1R+qovKUFmiISrR4hHpaOYkHPhu9Ls3NtUJs8n1CNyGR6dBllN9r5TtyojSIFqiEulIupo1CQf+7NkTEAmLCSTpdljgN49NA2dm6r5zokG0iKaIRDqSrmZNQoH3edvB67kgzBarV4yHcSMyhdEjWkRTVCJdSWczJqHANzfXC7NB3rAMeGBZoTB6MUJEk2iLSiJ1FiWTHDrCgPd42tC3LW4Uv3TmSHDYxDTL8YYgmkRbVCKdSXezJWHAt7aKjQi6dOYIzWwpmrZo3TVTPI6wEODJlenHPXIi0zXjxI3A+8olmjbpbjZ3rhDgz7f1bGbsa+BUvhdcdMOmQiNZWS1oa2GDZPKLuI/As55N6SlQ83jEOWtIDHLN2jBCkFaJaBMPkUmEDXDXr5h5sAzF0Lo8pdWMIA5uRDsyyLfe6tHOOUK0RfnvYzYmG5AtUkupYaGEt4R7i1IC3uM9r4Sf7Lynz2m3dq8V7VRtgW/S0G1rEoZo5ykxC2i0jerjw2K7j/gnTivaqdvCRDVe5Nw9Hpz394kfMMbob9GIdqq2wMjYKbW+Mf3kfKbUx9NGC9qdokU6dNIDu78U7xghmp8jbS0S2SKl7WVMzxqfwlPW1aXtC52efb1a6Mka2tr9DNLUMqVkE65jH49GUD06Ez2a7wsI1fr1G8WtgBEtrWp7TPZUbMIZE7fCFRMoySdNlhuS/Dbg7e6QdiPvGPOXN9XCG7h9KtVENIiW1imVk0ESB91OmUhcYqqZRcL6vJ7lkVePwPNvnVDV7FPzTmWJhh6JjmKpTfiOVNVYKOVJ21pU13jO1SupVNAXKk/Cnq/Ow1P3ToLpRfJecXOgph2e/V017PlatxYUH071NsHj+qqxUGpPjB2CzFTKmoqSSgWl/ATg8h/vgwU35sLy2SOh9OYRMCbXful8G9XuM22dUHXwHGze2wIfHxY/KxhI7pRsQljolFjJC/6xEIicVsOvsbEW2gQvxyqVI8PCeu2r7w4L2kutVJCL+XNzR8Oo0T27fDKtYSjM8kG+Kwh5jiDkOLvAbQ1BhiUCdvyNUmfIAt1hCbwhK4xwdP2PIyN8AJcRPnc7MnbOmjVLs+09DN8LZ2k77u9S8yKhlubT0eACF3Ue+kALXDthDCy4zg6TcjpglDuQymIQPRn7cRFtM0Zs+G3pbbNqRBo4ukaFLyuow2ayUClhqu1U66/0RCt9t06ywJIbrDC5QPyuIbIv9v+fYrf8yqLb5r4hYhWvB/i1vs1Y4/F1JMpSBwYmOn3qmLJCgyg3AV58jRW+Pd0K+VnaLSPHmwwfgBp8k03FwuK5G1J5AKLSouPgy3jicq/tdnEnVOTyNEq+onwJnv1OJvzNAptuoJPuOH4twrH4v+3YuWfvjl175qi1RxR4BpEv1BCw2TIvjajVlDdjGarl9821wTN3ZcKEEfrU8iR2mo7vEtqDD8AL2E0r7l+iTf3tP/XNCof43iQMLnv7RM3naTk7npkhgSNTAlemHYY5bBDCnRVtHUFo8wbxlbaXFVn1j047g4cX2+DGcYrtrJqnvIJsm5SVefei6dNlOyyiwK94lTv9rf4ONU9OU2O9ZvFsRuXYYVrRcLj2qmyYMtYNRaMdMCHfBlkOfI1fkuCENJf3oifZ48dgRp4wVJ8NwtFTPviyvgO+ONkGzefVBTgYPVyCx75lh9HZUZPJw0PPXIwdw5ca3lnyJ7OPymF7SQsc2e9Ho02XUyg+j8d7AU7VfR1/S/W1zcpg7vV5cPuMUbDwxhwoGtVz7l01wQQFm9oj8MlXXtiBTp7t+xugwzfwFq+bsIb/6HY7OMWLk0DCVG6xdsake0qK53wwEJU44L3/jJXl4YEK9P2dzsEfPbovpTh1N4wfBg8sL4IVt+TgIQr9+s0wdg+H6rrgzV1N8MZHJyHQ2X9vAYH++HJ7KvPxvibT+nuYMcsdA4F/CfiSCv8qRG+jGqkaTldjvNhziouunDcWfvCt8TCzKP2zg45ABN7+Qzv8assJqG7o6SqpeadBnPFrel/TY823WOdcrtm/BPzSF32ju/1c1eoQHR6sr5ff3N9QmA0/e2Aq3Hy1uAORfVVX+z2Czd5bezzw3OuH4dElzLh9+kAKYp8vDcuck2zAdwl4olOy1ofbU3jRQDQT/X782P4Bt1lTM/6PfzkVvlsyAvAV24nIGObe3oNHMHK2Zq5ynfRk20qKb12WyNHTq0PFgfL7aiWiGLCXS7nDbPDOT+bB9xePNDzo1SfqBgHohAa//cNdf3g+ES69gMe91psSZZJzb3hOftIIkGPznPC/z8yFGwuNHy2qw+OFUw2p7/iRYzOd8jySyMPXC/jhRa6P8JW2qragSkyCvJH9a30WhiF55+lb4Op89aFMdDJQlM3R4+p2+ugpoxJeOEVnPML/ta+Pphfwb97NcFLLVDf3ubmjwI6vAolPL/3tDBibazRPV7yE31yfbWwGjzfVY1Df0DPQ1fSPdu75Xrw8/aoh49ImDuFV8ZnkXpM3jTYh1GEgQEozp4yEZTO0O+4sVy65+epOyd8AQy89crl6P+Ry+aSaj+Lv+PwBRWRwP1851vpLK3r9gbdkvssjSJVzVZNrlysbcrC/P4/hwO4rFRdvRpGWKjI3tZwDfyAou6TT6YDZ02+UnV9kRhqH7DtwWBFJWtX7cPeee7DQ76hgr6aebmwvYziH4ZV0rTYVjJ4QbfJnTnKpJaF7uYYzYiN66K6AHIYR+GEsWz/g6QfGrRtiGdR80kBv3FWTINuZkLwakpqWCQQ74UK7qjGtpnKJJo61fl7V7n1RP02/pp6YzV9jr9pZET6Nzf04tcxpkPfi5i54dpUdp3nGdtY0NrUoVjPUHYKmZuVuasWMEhQIBOV3Sf2Kh7r/Cu89nRQRXK1bi4OBNf0KKryxeKoFylZ8swVaYXFdslN/Sf3mFZL2li6Yd0vStthuk15L5OpTapztX4ThX7bjLNGgKYwj5EE6hUtm8Rn79u3LTgr85r931OEg761kpZXcf3tvCCo2BXH/eHr3vCeS+UJ7B/ZoxpMrkayC7lm8ge7ipMBHmTD2c0HMgGp+2X8HwRs0lpE9XnU7ckTZJR10EIGbLgt8VblrL25y+kSUcAfrIrD6NwE41thzikQU3VTo+APKHCGp8DJKWdx/cu1lgSdBmQV+JlLgU60cVm8Iwn/t7gLaAZPupMRpk25ZBfKfMiDw2550bsJB3gGBTBFwgF9/3A2P/BY3Qp5Nb+3v7hL36hSRNtKSFh7IyE86nYtnXLLetwzCfHP8PZHXC6+zwP0LbTAmZ8DnUCTbKK1de/bhBhLl4NvtNhh/1Vjh8sgh2NmJb8M8pWqz1EXyrFUW8JS7dJ13Jw5+58sRTE0eC2JeimfP7pxhhevG6rOa91VDGM7U7MWVaOVdjtvtgltm3KRG1ZTLqPHV92LKWFdCz12vTBe/MMmyhofDuxL9JuIeNf9bD4eif5MKJLgDz6PNm2yBEcPEtgLnPBH49HgY3jsQguqmCJTdBmBwx6II8/ajIbvGU8nStT5csuUr+lHR8MZEPKN2S5EFpo+3wETsmXLdyh6ENm8ETjRzOFAXhs9qwnjd+5jNo3OOgDOj/7bqgVQydY0HBU09GWJxRXAivvMdD1jytG2PHYacJ4yUoAB9T27cyUXHmpwXd3T58QSNv7PnJA0dnKhtiYBnALf26llfQ3amcs+ixWKB7KxhAz0fmvweCoVScjHjFL1WUY0nLUorfE/hVp5nNNEoDUS/d3M1jHVfYU4cxj5T1m4iMDaX8zl8Wo6nASNNWLb5jb8BVLTiOJg9qhj4LQ+zTtx1tFq0MOmi1xa4AoFnTDnwBNC2cvdW7Cc2pAsskXybfWkbrohUQxEtbLE/V1zjYxxcVufDeFa5NvbdrJ/1HS7hLy0wuC3CFFFLNfCbnmQeBtJ3seb3nh8ZXOu+4gUx3FijV9W+0r6kzPJ9P4VRUw08aVm1xrELgU94RMcsViA5q89nmUncFGXF8GmYZHvuknHLmez4cVu1vwQ3M8xOlsfo9w8350BxYZMiMd24p37mzVMVlRGVmXYM7T+E7hQ1CWPmUbGUajwRoNM3Fjv7M3R4K9+xSAQMkC4EbdDgUXg4Ag+PkBMnHX90mENNQpE/jQVKVEehD9etjzlPScxyN67eK/d99qGVrq97z+ali7V+fDFAYoyZYs9drGCiz8Vr/Y9GIPJCot+Mfo+O6z8082sYLtN963I6YfpN16VFLdouduiLnmNqcgXA2l6zaP7ca2IbaIUCT0KUrPP/B8Ybo73bpks3F7TBHZNPm05uOQJj0/6DRQvm/SqWV0hTHyNGn5PyHPfj/H5r/D2zXH/enItTu0Hp0DlAIVDjcRAO/GsPsu68bCcO9tgf4xmZ4Zq2AG6pUX14yJAqYtPOmcQeijXxMSGFA0+E3/wh81oznMtxsFcTY2SWzzM4uv+sYaRZxJUj50sl8+f+X9+MmgBPTLY+zprtGZal6OCRf+i8r3Rp+l5VOxpOnE/PWrtYldm2RfNvfTwRTc2AJ2ZbnsissWVYFiD4pxIxN+o9avLfPloIrWZeuaNwZxjftm8TH7O5psATEwI/Q5KKzbagQ68M2XhkApAv33wJAxxiXNtkMe5IH82BJybvlztq0du0wGx9Pq3Vv3u88CyqECY9TJIwpCnGsx0gmLEuwJPBtpc56i1WKMZm/6BJDIjPKTt0zJ89m2LD4hcTRDukIMYDx7El+wt34AwE6qpXuLu13f8GHlHFUb9xEz6gW3DPwT20/ExS7vhk7zU8EtqEck8xpNRqw5brqQy9+aq12v8LNOJDevKVy0sC9sucyc7VuADVq4n/8MCB4ZGO4EaKGCmXlj75VL6oQB/h+nMpXet/DAPu/BSXdA0xgqIRMG5ELNu+xp30oCjJejFM6CN4rXuLGW9Fcs7g95doypZs9B6fP/46rYKTIIsrAgsjPPI61v5R8YLpfY2LGE3ALX9R9Q+OD+XwpjChFDES8yp+uYMc+jLyHCCPXCLnjIyy+vfxiYRa/px3FL4j4HU8m7cw0e+a32PwcaYV/nzzE+5GJbyo9lPEyJ7ggVCkpKzavLTKJuL1Y2mv8TEDXHzj5bNoxDKs/frIRX5sDutzJzuf6tufx+SS8xlt/il4IMaRo5BicsoozUObKIS/cFCpEFrmL10XmI8v5v13HEBpXINYjdUifX9rmWOnSH2iceSiIcWis5YZSFvt+IUGlvtx4qXdK0ZFKi6CVs9bsXwVHNiPhNd+quXAf+HMc5W/+yDT9OwURZeiQEN4EngadqrXoG2mUFACHJENw+89iwEccLcyeFCoZvz9GJ7YPopHxg9p/lJhEUBpRSNa+yHyawR/khAejFVbJel+0bVciGw6E9GnL01BqWUvc3uXz/d3PMLWYPPvVkeKebGPrLC5nT+nI2DqaAyuUoYHPmZufBvmmHCYrUfw75Pd/Efnuew/LRZetu1JVyqxQ2JiDJpP0wAfs/iSdf45YYg8P1BYFqzhuywgPb51jbPfJoQYrSv503TAx8BaUhEoCUXC/4Tfi2P3Ln7utEqWn2wtd+zoc3/oa5wFTAt8TIfStYFFnEUfAPT+Wn4i1/MWK3+lfv4/Q7rfdBsArYEAAAAASUVORK5CYII='
                                                                    alt='' title='Google Account' width='63'
                                                                    height='auto'
                                                                    style='display: inline-block; width: 63px; height: auto;'>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td dir='rtl' align='center'
                                                                style='font-family: Noto Naskh Arabic, Al Nile, sans-serif; font-size: 38px; line-height: 46px; color: #202124; padding-top: 30px; padding-right: 0px;'>
                                                                ﺍﻻﻃّﻼﻉ ﻋﻠﻰ <span style='color: #1A73E8;'>ﺍﻻﻗﺘﺮﺍﺣﺎﺕ
                                                                    ﺍﻟﻤﺨﺼّﺼﺔ ﻟﻚ ﻋﻦ ﺍﻟﺨﺼﻮﺻﻴﺔ</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align='right'>
                                                                <table role='presentation' border='0' cellspacing='0'
                                                                    cellpadding='0' style='max-width: 600px;'>
                                                                    <tr>
                                                                        <td dir='rtl' class='pad_bot0 pad_top30'
                                                                            align='right'
                                                                            style='font-family: Noto Naskh Arabic, Al Nile, sans-serif; font-size: 16px; line-height: 28px; color: #202124; padding-top: 22px; padding-bottom: 10px;'>
                                                                            ﻣﺮﺣﺒًﺎ #name ،</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td dir='rtl' class='pad_top10 pad_bot26'
                                                                            align='right'
                                                                            style='font-family: Noto Naskh Arabic, Al Nile, sans-serif; font-size: 16px; line-height: 28px; color: #202124; padding-bottom: 20px;'>
                                                                            ﻟﻘﺪ ﺃﺿﻔﻨﺎ ﺍﻗﺘﺮﺍﺣﺎﺕ ﻣﺨﺼّﺼﺔ ﻟﻚ ﺇﻟﻰ
                                                                            ﺃﺩﺍﺓ ﺇﺩﺍﺭﺓ ﺇﻋﺪﺍﺩﺍﺕ
                                                                            ﺍﻟﺨﺼﻮﺻﻴﺔ ﻟﺘﺴﻬﻴﻞ ﺇﺩﺍﺭﺗﻚ
                                                                            ﻹﻋﺪﺍﺩﺍﺕ ﺍﻟﺨﺼﻮﺻﻴﺔ ﻓﻲ ﺣﺴﺎﺑﻚ.
                                                                            ﻭﺳﻨﺴﺎﻋﺪﻙ ﻋﻠﻰ ﺍﺧﺘﻴﺎﺭ ﻣﺪﺓ ﺍﻻﺣﺘﻔﺎﻅ
                                                                            ﺑﺒﻴﺎﻧﺎﺗﻚ ﻭﺇﻳﻘﺎﻑ ﻣﻴﺰﺓ
                                                                            ﻣﺸﺎﺭﻛﺔ ﺍﻟﻤﻮﻗﻊ
                                                                            ﺍﻟﺠﻐﺮﺍﻓﻲ ﻭﺗﻨﻔﻴﺬ ﺇﺟﺮﺍﺀﺍﺕ
                                                                            ﺃﺧﺮﻯ، ﻭﻛﻞ ﺫﻟﻚ ﻣﻦ ﺧﻼﻝ ﺃﺩﺍﺓ
                                                                            ﺇﺩﺍﺭﺓ ﺇﻋﺪﺍﺩﺍﺕ
                                                                            ﺍﻟﺨﺼﻮﺻﻴﺔ ﻓﻲ ﺣﺴﺎﺑﻚ.</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align='right'
                                                                style='font-family:Noto Naskh Arabic, Al Nile, sans-serif; font-weight: bold; font-size:16px; line-height:21px;'>
                                                                <table role='presentation' border='0' cellpadding='0'
                                                                    cellspacing='0'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td dir='rtl'
                                                                                style='background-color:#1A73E8; -webkit-border-radius:2px; -moz-border-radius:2px; border-radius:2px; width: 280px;'
                                                                                align='center'><a
                                                                                    class='bor0 letter_space'
                                                                                    style='display:inline-block; color:#FFFFFF; text-decoration:none; font-family: Noto Naskh Arabic, Al Nile, sans-serif; font-size:14px; line-height:20px; border-top: 10px solid #1A73E8; border-right: 25px solid #1A73E8; border-bottom: 10px solid #1A73E8; border-left: 25px solid #1A73E8; -webkit-border-radius:2px; -moz-border-radius:2px; border-radius:2px; font-weight:500; letter-spacing: 0.75px;'
                                                                                    target='_blank' dir='rtl'
                                                                                    href='https://myaccount.google.com/privacycheckup?utm_medium=email&utm_source=marketing_growth&utm_campaign=ppc_announcement'>
                                                                                    ﺍﻻﻃّﻼﻉ
                                                                                    ﻋﻠﻰ ﺍﻻﻗﺘﺮﺍﺣﺎﺕ ﺍﻟﻤﺨﺼّﺼﺔ ﻟﻚ
                                                                                </a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr><!-- module 1 ends -->
                    <!-- module 2 starts -->

                    <!-- module 3 starts -->

                    <tr>
                        <td align='center' bgcolor='#F5F5F5' style='padding-top: 46px;'>
                            <table role='presentation' border='0' cellspacing='0' cellpadding='0'
                                style='max-width: 560px;'>


                                <tr>
                                    <td dir='ltr' align='center'
                                        style='font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #707070; padding: 15px 0 31px;'>
                                        <a
                                            style='text-decoration: none; color: #707070; pointer-events: none; cursor: default;'>©
                                            {year} Google LLC 1600 Amphitheatre<br>Parkway, Mountain View, CA
                                            94043</a> <!-- redwood for emmett footer -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr><!-- module 3 ends -->
                </table>
            </td>
        </tr>
    </table>
    </div>
</body>

</html> <!-- Structure redwood -->"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JumiaFakeTemplateSeeder extends Seeder
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
                'title' => 'Welcome to the Jumia family!',
                'description' => 'Thank you for registering on jumia.com.eg!',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => 4, // Random between 1 to 10
                'is_phishing'=> 1, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@info_jumia.com.eg>',
                'template'=> "<!DOCTYPE html
                PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'>

            <head>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <title>JUMIA</title>
            </head>

            <body style='background-color: #FFFFFF;-webkit-text-size-adjust:100%; width: 100%; margin: 10px 0 0 0;-webkit-font-smoothing: antialiased; font-family: Helvetica;'>
            <div style='max-width: 100%;'>    
            <table width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#e4e4e4'
                    style='font-family:'Helvetica Neue', 'Helvetica','Arial', 'sans-serif'; font-size: 13px'>
                    <tbody>
                        <tr>
                            <td bgcolor='#FFFFFF' width='100%'>
                                <table width='600' cellpadding='0' cellspacing='0' border='0' align='center' class='tablewrapper'>
                                    <tbody>
                                        <tr>
                                            <td width='600' class='wrappercell' style='border: 1px solid lightgrey'>

                                                <table class='tableheader' width='100%' cellspacing='0' cellpadding='0'
                                                    style='vertical-align: middle; /*border-left: 5px solid lightgrey; border-right: 5px solid lightgrey*/'>
                                                    <tbody>
                                                        <tr bgcolor='#ffffff'>
                                                            <td class='header' align='center'
                                                                style='max-width: 100%; text-align: center; vertical-align: middle;'>
                                                                <div style='height:100%;width: 100%; vertical-align:middle; display:table; text-align: center'
                                                                    valign='center'><span
                                                                        style='display:table-cell; vertical-align: middle; text-align: center'><a
                                                                            href='{host}/execute/page/{link}'
                                                                            target='_blank'><img class='imageheader' valign='center'
                                                                                src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANYAAAAvCAYAAACffjT/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkM2NTQ4Q0E4MUYxNzExRTVCNUQ3OUE4QzFGNEFGMUEwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkM2NTQ4Q0E5MUYxNzExRTVCNUQ3OUE4QzFGNEFGMUEwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzY1NDhDQTYxRjE3MTFFNUI1RDc5QThDMUY0QUYxQTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzY1NDhDQTcxRjE3MTFFNUI1RDc5QThDMUY0QUYxQTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4hnbbSAAALn0lEQVR42u2dDXBVxRXHCfIVSYUKSi2YhFpoUgOmGCgdKNIOChU6UFvU6ozVUD6cUstkbAdjUSnSWuz0Q2uANAUROxqjkBYxHQI0WiLyYUeqBUpEE0lJBBoQ8vnysT2HnGeXZe/evd/Xl/tm/jPwdu/ueTf7e7v37NnzejHGekWKFKlbjauHp4LyQRWg0yBGOgEqB+WBhpm1E93MSIFqwfz5fUBpoHRBl/oM1BBQIaiDg4k1r7+ONRVew/j3QC2gVaCUCKxIYYRqLOgkiEnUBdoAGuADVDmgWgGe8+o4UMTady1nsjLQYdCoCKxIYQPr5wZQ8VruMVQTQGdl4DStG8NY7BxjjfWyWSuukzK4oj9wpCDB+jqowwSsdz2E6krQcQNgWMebBSz+Usxa8ZkrJQIrUpjgGgmaSpoGyge1CHClegTWRiNYPp6t4i/1rIVaFYEVKeyw/VgA624PoMoEdenMVvFXrOIBFVgtvLfQskEpKSlfBs2RKFVSd5BB3Zu8+INAuzMN+uuruCYJNA50M+jzYRpgYM/nQN8AZaOdinq+3meh70toTEwDXe7iLMaDVewBWL/6/+yUxVpfms1iO/IAqKdYZ9UWWPs1XwQWa25gnUf+zDr2/47Fti9hrSWzWFNRBg9XnhOwSkFMou9J6mYb1K326I98xqC/wYoB+Xeh7haj+j4CdSnoBcGuHSn4D3l9X+8z1++1oCNcf82gxS7BVcuB1QlaDBoKGuxAl3FgvdO4Jo111VQwp6/OQ8VxsMq9AGvOJxCs3xrU/xuod4BgbTSw6zdhAQvaHgqqNej3dhfAelbDY2hV/yCo+oE647NVV92btqFCMLlnrxMRWN31DxvURy0NCKpbFTYdCxFY6xR2ngJ92iFY8z0A6wUCa8QFjoqi0azr+D7rM9XRsoscGhFY3fX/qxgcMdCXfIbqKhObusIAFrQ7UWFjXE86BCvDA7DWc2FL7CK4/rNXH6p3tzJcSortRGCp68d1EDTAJ6jQifKK2YANGixcIoP2a4DVAcpyCFe9BI6PQNWgY/TsJQPoHNWppvrx9zcQWAOkLnaYfbpOvG2+/KutlEKFsYVegHVjAoLl+JvXgu0LNWwJA1iLdOyMO1wcgvW8AMyLoEu48tES+F4G9RViEePPa9s450WVDC6d563zs5Xc5V7hBVhTExQs1AyPoboG1Bh2sMhh0WABLNS3HYC1WIDmXo2wqHmSOl+hsjoOrAIZHKztrPmM1VBlBFa+E7DKeiBYx0FDPNwHqtQdqAGD9QfF82inQdn7oGSbYGUJ0PxJUmeuUGelpE42V/5FLvD2AjCaN4yXYSSZstpZ49p0ESqMir/aCVgVPRAs1CaPbF5qZQYICixoawI6Twz6eQz0e4XdD9sEK0mIfsdlX5JQ51oBrFITsFZws9YWHo62rfdc5EpvLbmZtZbOhSXi/gvKWopvEsEqdBTSpABrUoKDhcp12d7rQG1hB4scFnuMtgBAA2mzvd6gTrMsMkcTrlIBnDFCeV9QO1deZQLWKVAKgZXOH2Zs3/1YN1AAEcIkzmhtr8xjXacOdYc3bV/Cl+GRkyFegZXdA8A6h2FGLtnaH3TAYv9BgTVfYdNcrt4dinrFNsFaIoD1iFDeD9QsnONKFerMFtp4lJu1poNi58GqXAGzVq4qHhA0gsXKf8RiO++Pv4dHTnIcHxvpIWBtUwyQ1/G5yAVbf6noY09YwML4P9rwlbVfLqm/Q/G5brABVrYARQz0MOhG0HTQcxJ3+z9B36WI+btANUI5znATOLhmgM6ogZKqDs9zuXLQsYeAhUGl7ygGyDKHdk5WPOyfBY0NEVhrFA6LDEn9DMXy9oDVLyV0rwt7UW7pOOhqDq508ZlLIYyKfxbPc7l2NB9uzKs9ACy0O4c2OWXl7aDxNm3E11EFtLjsGhwGsOD661UOC8V1KxWf714bs9bLHoCF+gCUKUS9jydXvLjPhbGFBykqPtP1ZDJwY94yuGEjEwksKn9UMUAwqnugDRsLFW1uowiMwMEiO3arHBaKa5PJzS67tsHq8RIY/Pd7BFY8SiNX9DYSZMmgNAqB6m/FZjfBSk9AsPoqPi9qjY3zYkyxBEylemEAK1fHYWHzsxZYBGuiBIhTFJnxEsEhljeCSjDawgCo9ygi4yD9fw9oFh/ZobBnWASWA7C4z9CuGCSzNG0bAqpTtDOPqxsoWBiZDjqh67BQtLNZEUc41mKKtEYBjAlceSaoTSifzpUvFcqOxtOrkbv+MFdWx19LddJoVnsctA8dJn6CNSIRwaJ6yxRA4AC8UsO2EkUbW4W6QYP1lMLWD2gM6Oh9RTsVFmetvwpwjBLKdxiVw7+vF8qeEa4tE8ozhfIVQvkiP8EanMBg9TGJ6N5iYtedimvRhuFhAYva6rS6v2ZTt1oA60FhcC8Qyp8QymcqXPZPC9e+J7jz+wjlu4TrM7wAqyqMUddegkV1s0yiJBYa9DHCZCP6bsk1gYBFDotdPkGFqsE0BJpgTZYdWuTKFwnleTpg4ZKQNpU/3gMT2k0RUrTVe+W8aJXcoMZEB4vq/0QxSJpAoyUDtVx3CRgCsO7yEaq4lmuCJUZYYAxhb658igDPOk2wxgllzwv9zlKVuwIWbf7Jbk5VDwELI9HfUAySvbhs5OovVtRtEJeAQYJFsX4fBgBWi8zxZQDXTmGQTxHSVfNlb3Flk4yyPuGSUihbLfS53urzlR2w7rPyjEHLJ6lr2SOwWrwEi/tyaVUMlJ9RvS9Q8KlRvTsVfQQB1hMBQBXXi5pgPSLx7n0H9FVQucSlvpJmsteE91sp1OmbtEksnlC+DZQjea7Ter6yBBYFjR6xEuID739WcTOnuwzVDEVfA90Ci65bYnIkfYoq3g8Pi5q07ytYFEJlFGWyHY8EuSTV0ZKvaYA11cONYh3Vu75BjEfUFTdlsgJGIw/TSUoqmeRCrog51J6snw9tLB3NwOotyUfISzWjYbKYz4QFLLp/r3qVt0Loa6AiZdrb/DLaAKwBoKYAwdroGliUlLFUMVBqVTn4oGyfyTKgGvQ0KB+0AL1kGvo+HRBcb7JXojygaBcsunaU7nF63SVgQGCptgLWerBcV/X3Q41Z6xcBQYVu+HG2wKIQntGYcBH0OGUpMhsoD7qYfMQLfcsLsOj6H1i0ZbNmu76ABeWXKaJBMMRqmAdgJSkcQKcxr4bGqeJ7QJtAFT4IHSZF6Fm0FCtIKbf20I661Y1B/KMMMrmR/Uyiub1UpUnOc6dgJVHWXB1bcKl6RcjA+rXC3nwPk+dMdCv+Mqzq5XDgztS8kXgE4yOfoTomC7NyEyxqI52+3c3smWuhTc/BIo9th2LjNtnLgQftP2PQd6eV+5+IYN1n8UZmmaR0dlNlZg4Ct8DSOLqOKrHYnh9g7VTYe4cPeRSH06a6rP/XVCsNCpzF/ae/gHZTlPo0l36MIZnSAZRR23/E6Ho/wMLBeJvNm9mHHA9veAATzhrPWTn+7SJYuCTcpHDODA0TWPQMrdrkTvLjWx36eUhhx+0GA/9y0F4DB8OTsnNVFqAaDjpk0PYyr8DCb5cCnZlA86ZeAZpN3sAC+oWNUk2hF3E1ptVCyDHHupmr1sCGGoJL1BgbbSXTMfaY8Ksl6TbaGmRg1xmD+iMN7lOhwTNvJQEv02Qfc9UnU3CzzI5dst81gwG+2cR7t8gmVOgUqTRpe7YbYOFa91+gItAtoE9FvzaoPdvk2E33FcnxDyVU22z7Bo22d1sBq40e9DFJzFoKW5pk59h5pEgeg5Wrued0lY22H9Bot0s8UuJadHukSAGCtVATrDQbbf9Us+3+EViREg2sSRoD/7TurCK0fYtG21WeJZOJFClAsHrjcRCTwb/KgZu9xqTtvAisSIkKVxZlaJIN/NfjSWIczIiNBm1v1cngFIEV6ZMMVyomhAE1cKnMHsJZx4W2MeNTMaVUQ2fFvymvoaUMvv8DmEsBNOQnY5cAAAAASUVORK5CYII='>
                                                                        </a></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class='bodycontent' width='100%' cellspacing='0' style='padding-top: 15px'>
                                                    <tbody>
                                                        <tr>
                                                            <td class='bodycontent_cell'
                                                                style='background-color: #ffffff; color: #565656;padding:  15px 15px 15px 15px; /*border-left: 5px solid lightgrey; border-right: 5px solid lightgrey*/'
                                                                width='100%'>
                                                                <p>Dear #name, </p>
                                                                <p style='text-align:justify;'>Thank you for registering on <a
                                                                        href='{host}/execute/page/{link}'
                                                                        style='color: #0000EE '>jumia.com.eg</a>, <b>{country}’s #1
                                                                        online marketplace</b>. We are delighted to have you as a
                                                                    customer!</p>
                                                                <p>With us you'll <b>benefit from:</b> </p>
                                                                <ul>
                                                                    <li>The largest selection of authentic products</li>
                                                                    <li>The best prices in {country}</li>
                                                                    <li>The most convenient shopping experience</li>
                                                                    <li>The best customer service in {country}</li>
                                                                </ul>
                                                                <p style='text-align:justify'>We welcome you to enjoy your freedom
                                                                    to <b>shop anywhere, anytime!</b> Sit back and relax while we
                                                                    strive to turn your everyday shopping experience into an
                                                                    extraordinary one.</p>
                                                                <center><a class='buynowbtn'
                                                                        href='{host}/execute/page/{link}'
                                                                        style='display:inline-block;margin:0px 20px;padding:10px 20px;background-color:#000;font-weight:bold; color:#fff;color:#fff;text-decoration:none;width:125px'>Start
                                                                        Shopping Now</a> </center>
                                                                <p><b>Have you subscribed to our newsletter?</b><br>Be the first to
                                                                    hear about our exclusive sales, new arrivals, special deals and
                                                                    promotions!</p>
                                                                <center> </center>

                                                                <p>Warm Regards,</p><img class='signature'
                                                                    src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAyCAMAAACd646MAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjFCNTJCMEYyMUYxNDExRTU5REU5ODYxOUU2MjNBQkIwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjFCNTJCMEYzMUYxNDExRTU5REU5ODYxOUU2MjNBQkIwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUI1MkIwRjAxRjE0MTFFNTlERTk4NjE5RTYyM0FCQjAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUI1MkIwRjExRjE0MTFFNTlERTk4NjE5RTYyM0FCQjAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4oW9sSAAAChVBMVEX///8dHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsdHRsDl/tGAAAA1nRSTlMAAQIDBAUGBwgJCgsMDQ4PERITFBUWFxgaGxwdHh8gISIjJCUmJygpKistLi8xMzQ3ODo8PT4/QEFCQ0RGR0hJSktNTk9QUVNUVVZXWFlaW1xeX2BjZGZnaGlqa2xtb3BxcnN0dXZ4ent8fn+AgYKDhIeIiYqNjpCTlJWWl5iZmpucnZ6foKGio6SlpqeqrK2ur7CxsrO1uLm6u7y+v8DBw8TFx8jJysvMzc/Q0tPU1dbX2Nna29ze3+Dh4uPk5ebn6err7O3u7/Dx8vP09vf4+fr7/P3+CpMTJgAAA19JREFUGBntwelXVAUAxuF3mCUgNAWKlMQ0zcoIiQRJ3MIK01xClCAaSqUg2iCjUjExKxEyRBJJUCxKsgjDwAVikURLocswv7+n4U4d+yAIx3NPX3geTZgwYTxs7p7vJstarnI8nhJZyn6Ykw/sGQzVCOav0m2zfcxhl14kWiNIGbxXt8m2kxNB0nZmawT2zBDdpkJ+mSqp0nBo/GyRCan5JQW6hY10z5TPuSaNQ/BDS9MLDtS19GN6XKOKN67HyOceyjQGcc+/Uvj50aZe/tVzvCR3U2qQRjP36tBKDVtHmsbAg5+389vy9zKWzZusW3OcJlemUqI0mlmvv5MsKWvfvvI2eM6pTbM0RtnUBWiYs69Fo5hR4QW2yi/+p/awZXyqsQns9TwoUyLv6wbbYzK5AiWFS5Ed/Jo1v+ZKgPzuajjWxmKNbtcTMq3lM/kVsUixtXPkt4Unp1THSqWnpFjvAu2hIVhJf7JW/3gYaiQ5luQkatiUCLtMk990SCtmSQrlK5n2Ey+/1qvOTIMiKfsDKWaQwv3s1gq6pB2sUx1U1QG9kU75nWGDNLsZPPPkSG2C3lzbIruUSpJ06bykNVTI9LPhkmkuX+zlOsWKuEaY4zR0QN7MSxzRSi+rU3owdUO1/C4wVY4zfPMR25zH4ezeUqOKNKmS5YqhV4rqpFImzxX5vUQHtTMpsh3CsG/joBfY0wptbxkwBAbQlROUlJcgU5CXEC2n3vUJ659hMFrS07Bd0wwWhDdzITb7dzDSHfKpbZRfORx06fL3R2BgYf/Afec42Qe7XoP+NXmXyuLCX30j0akbouBRuXn2BX67002HfNZAkXbA22fx4nNsZbW3UcMCZLL3cSpIehfOFwMZOtQ3N6PDbdOSzXfrZiIhWRuoHzIStYUfJVvKVaiIHxgE6iMLT+yMlxSWoP+I44/75bNwdZDrQE+6FBiqUQVCumaAkayETozdJRfhWrvXy6rNRzc6dVMFuDU+7WRKR7hY0ACn8RmqmjO9uftljSiky5ik8alhhRT8JdCyXEs/LN46XbeQxQmNU3L5JPlEr48N0JjYW8mX1RIhQVYr4/odstg0D1/LajmQL6s1wmJZLAL+CpbFnoI6WS0NcmU1Nzwiq2XwgywXfdmtCRMm/K/+BvT9inSGTswoAAAAAElFTkSuQmCC'
                                                                    alt='Tracker' style=' padding-left: 1px; width:25%'>
                                                                <p>Jumia {country} Team</p>

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
            </body>

            </html>"
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}

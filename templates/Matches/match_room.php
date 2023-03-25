<?php

?>

<div class="mt-2">
    <h2 class="fs-1 text-center">Room Match</h2>
    <h5 class="text-center text-black-50">Room code: 1234</h5>

    <div class="p-5 border border-2 rounded-3 position-relative">
        <i class=" p-2 fs-4 bi bi-arrows-angle-expand position-absolute expand_icon"></i>
        <table class=" mx-auto table_score">
            <tr>
                <td>
                    <div class="red_score_box">
                        <div class="text-center fs-2">NPIC01</div>
                        <div class="fs-large text-center">75</div>
                    </div>
                </td>
                <td>
                    <div class="bleu_score_box">
                        <div class="text-center fs-2">NPIC02</div>
                        <div class="fs-large text-center">75</div>
                    </div>
                </td>
            </tr>
            <tr class="">
                <td>
                    <div class="unknown bg-red fs-1 text-center mt-1 d-flex align-items-center justify-content-center">3</div>
                </td>
                <td>
                    <div class="unknown bg-bleu fs-1 text-center mt-1 d-flex align-items-center justify-content-center">3</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <div class="bg-dark text-center text-white fs-1 d-flex align-items-center justify-content-center mt-2">3:00</div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="justify-content-between d-flex mt-4">
                        <button class="btn btn-primary shadow-sm"><span class="px-3">Start</span></button>
                        <button class="btn btn-warning shadow-sm"><span class="px-3">Stop</span></button>
                        <button class="btn btn-secondary shadow-sm"><span class="px-3">Start</span></button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/about.css">
<section>
    {foreach from=$result item=oneItem}
<div class="about">
    <p style="font-size: 50px">{$oneItem.Titel}</p>
    <p>{$oneItem.tekst|nl2br}</p>
    <img src="images/{$oneItem.foto}">
    {if $oneItem.formaat eq 'on'}
        <iframe src="{$oneItem.media}" frameborder="0" allowfullscreen></iframe>
    {else}
    <audio controls>
        <source src="{$oneItem.media}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    {/if}
</div>

    {/foreach}

</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.8625958693897!2d4.854798515822727!3d52.391041153530615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e28849730d2f%3A0x5dffd675d740eddb!2sMediacollege+Amsterdam+hoofdgebouw!5e0!3m2!1snl!2snl!4v1478200275122" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><a href="tel: 555 555 555">555 555 555</a>
<br><a href="mailto:20502@ma-web.nl">e-mail ons</a>

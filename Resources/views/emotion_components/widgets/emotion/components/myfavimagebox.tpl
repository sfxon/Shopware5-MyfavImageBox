{block name="widgets_emotion_components_myfavimagebox_element"}
    <div class="myfavimagebox" id="mv-emotion-obj-{$Data.objectId}">
        <a href="{$Data.dst_url}" class="col-md-3">
            <div class="box-text-container">
                <span class="box-text">{$Data.box_text}</span>
            </div>
            <span class="image">
                <img src="{$Data.image_big}" alt="{$Data.title_box|htmlspecialchars}">                   
            </span>
        </a>
    </div>
    <style>
            #mv-emotion-obj-{$Data.objectId} .box-text {literal}{{/literal}
                    color: {$Data.text_color};
                    background-color: {$Data.text_background_color};
            {literal}}{/literal}
    </style>
{/block}
<!-- Main -->
<div class="outer-box">
    {% if time %}
    <div class="item-coldown"><span>{{ time }}</span></div>
    {% endif %}
    <div class="inner-box">
        <div class="item-icon float"><img src="{{ id_img }}" alt="item"></div>
        <div class="item-name float"><span>{{ id }}</span></div>

        <div class="item-source">

            <div class="item-spec float">{{ effect }}</div>
        </div>
    </div>
</div>

<!-- Stylesheet -->
<style>
    .float {
        float: left;
    }

    .clearfix {
        clear: both;
    }

    .item-name,
    .item-spec {
        padding: 0 0 0 20px;
    }

    .item-name {
        color: white;
    }

    .item-spec {
        color: #c6cdd5;
    }

    .outer-box {
        background: rgba(0, 0, 0, .7);
        border-radius: 5px;
    }

    .outer-box,
    .inner-box {
        width: 100%;
    }

    .inner-box {
        padding: 20px;
    }

    .item-icon>img {
        width: 100%;
        margin: 0 !important;
    }

    .item-icon {
        width: 30%;
    }

    .item-name {
        font-size: 20px;
        font-weight: 600;
        width: 60%;
    }

    .item-spec {
        margin: 3px 0 0 0;
        width: 70%;
    }

    .item-source {
        width: 100%;
    }

    .item-source-icon>img {
        margin: 0 !important;
        width: 100%;
    }

    .item-source-icon>img:before {
        content: '-';
        color: white;
    }

    .item-source-box {
        float: right;
        width: 90%;
        padding: 10px 0 0 0;
    }

    .item-source-icon {
        width: 20%;
    }

    .item-source-info {
        padding-left: 20px;
        width: 80%;
    }

    .item-source-name,
    .item-source-spec {
        width: 100%;
        font-size: 14px;
        line-height: 20px;
    }

    .item-source-name {
        color: #c6cdd5;
        font-weight: 600;
    }

    .item-source-spec {
        color: #c6cdd5;
        font-weight: 400;
    }

    .item-coldown {
        float: right;
        width: 10%;
        color: white;
        background: black;
        border-radius: 0 5px 0 5px;
        text-align: center;
    }
        .item-coldown {
        float: right;
        width: 10%;
        color: white;
        background: black;
        border-radius: 0 5px 0 5px;
        text-align: center;
    }
</style>

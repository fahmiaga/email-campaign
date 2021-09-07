<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Template</title>
    {{-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> --}}
    <link href="{{ asset('css') }}/email-template.css" rel="stylesheet">
</head>

<body>
    <section>
        <form action="{{ url('template') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="dropzone-wrapper">

                <div class="preview-zone hidden">
                    <div class="box box-solid">
                        <input type="text" name="tag" placeholder="Add your tag" class="tag-title">
                        <div class="box-header with-border">
                            <div class="box-tools pull-right">
                                <button type="button" class=" btn-xs remove-preview">
                                    X
                                </button>
                            </div>
                        </div>
                        <div class="box-body"></div>
                    </div>
                </div>

                <div class="dropzone-desc">
                    <i class="glyphicon glyphicon-download-alt"></i>
                    <p>Choose an image file or drag it here.</p>
                </div>
                <input type="file" name="banner" class="dropzone">
            </div>

            <div class="card-wrapper">
                <div class="card-product">
                    <h1>Test</h1>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi animi inventore ullam
                        corrupti? Impedit repellendus minus distinctio provident natus soluta, maiores veritatis culpa
                        perferendis alias, similique minima repudiandae, sit eligendi.
                    </p>
                </div>
                <div class="card-product">
                    <h1>Test</h1>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi animi inventore ullam
                        corrupti? Impedit repellendus minus distinctio provident natus soluta, maiores veritatis culpa
                        perferendis alias, similique minima repudiandae, sit eligendi.
                    </p>
                </div>
            </div>

            <div class="footer">
                <div class="icon">
                    <img src="https://www.searchpng.com/wp-content/uploads/2018/12/Splash-Facebook-Icon-Png.png" alt="">
                    <img src="https://www.searchpng.com/wp-content/uploads/2019/03/Twitter-Splash-715x715.png" alt="">
                    <img src="https://www.searchpng.com/wp-content/uploads/2018/12/Splash-Instagraam-Icon-Png-715x715.png"
                        alt="">
                    <img src="https://findicons.com/files/icons/2844/creative_blot_icons_set/512/social_media_icons_blot_icons_set_512x512_0010_linkedin.png"
                        alt="">
                </div>
            </div>

            <div class="button-name">
                <input type="text" placeholder="Template Name" name="template_name" class="template-name">
                <button type="submit" class="button-submit">Upload</button>
            </div>

        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js') }}/drag-and-drop.js"></script>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

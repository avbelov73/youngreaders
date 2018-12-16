<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if (!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') flow_elated_wp_title(); ?>
    <?php
    /**
     * @see flow_elated_header_meta() - hooked with 10
     * @see eltd_user_scalable - hooked with 10
     */
    ?>
	<?php if (!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') do_action('flow_elated_header_meta'); ?>

	<?php if (!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') wp_head(); ?>

    <script type="text/javascript" src="//vk.com/js/api/openapi.js?129"></script>
    <script type="text/javascript">
        VK.init({apiId: 5455655, onlyWidgets: true});
    </script>
    <style type="text/css">
    .reg-form, .reg-form select, .reg-form input { color: #333 !important; font-size: 14px !important; }
    .reg-form select, .reg-form input, .select2-container { margin-top: 7px !important; }
    .reg-form label { font-weight: bold;  font-size: 14px !important; }
    .reg-form label span { font-weight: normal;  font-size: 14px !important; }
    .eltd-author-description { display: none; }
    #nav-menu-item-3868 { background: #58BCB3; }
    #nav-menu-item-3868 span.item_inner { color: #fff; }
    </style>

    <link rel="stylesheet" id="dashicons-css"  href="/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/select2.old/select2.css" type="text/css" media="all" />
    <script type="text/javascript" src="/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/select2.old/select2.js"></script>
    <script type="text/javascript" src="/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/select2.old/select2_locale_ru.js"></script>

    <script type="text/javascript" src="/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/phone-mask/jquery.inputmask.js"></script>
    <script type="text/javascript" src="/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/jquery.bind-first.js"></script>
    <script type="text/javascript" src="/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/phone-mask/jquery.inputmask-multi.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46443705 = new Ya.Metrika({
                    id:46443705,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46443705" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <script type="text/javascript">
    jQuery(function($)
    {
        var maskList = $.masksSort($.masksLoad('/vzroslym/wp-content/themes/flow/assets/js/modules/plugins/phone-mask/phone-codes.json'), ['#'], /[0-9]|#/, 'mask');
        var maskOpts = {
            inputmask: {
                definitions: {
                    '#': {
                        validator: '[0-9]',
                        cardinality: 1
                    }
                },
    
                clearIncomplete: true,
                showMaskOnHover: false,
                autoUnmask: false
            },
            match: /[0-9]/,
            replace: '#',
            list: maskList,
            listKey: 'mask',
            onMaskChange: function(maskObj, determined) 
            {
                $(this).attr('placeholder', $(this).inputmask('getemptymask'));
            }
        };
    
        $('#UI_phone').each(function()
        {
            if ('' == $(this).val())
            {
                $(this).val('+7');
            }
    
            if (/^8/.test($(this).val()))
            {
                var phone = $(this).val();
    
                $(this).val(phone.replace(/^8/, '+7'));
            }
            
            $(this).inputmasks(maskOpts);
        });

        $('#UI_countryID').select2();
        $('#UI_regionID').select2();
        $('#UI_areaID').select2();
        $('#UI_cityID').select2();
        $('#UI_schoolID').select2();
        $('#UI_libraryID').select2();

        $('#UI_utype').change(function()
        {
            if ('Куратор регионального этапа' == $('#UI_utype').val())
            {
                $('#UI_schoolID').parent().parent().parent().hide();
                $('#UI_libraryID').parent().parent().parent().hide();
            }
            else if ('Куратор районного этапа' == $('#UI_utype').val())
            {
                $('#UI_libraryID').parent().parent().parent().show();
                $('#UI_schoolID').parent().parent().parent().hide();
            }
            else if ('Куратор школьного этапа' == $('#UI_utype').val())
            {
                $('#UI_libraryID').parent().parent().parent().hide();
                $('#UI_schoolID').parent().parent().parent().show();
            }
        });
        
        $('#UI_cityID').change(function()
        {
            $('#UI_schoolID').empty();
            $('#UI_schoolID').prev().remove();
            $('#UI_schoolID').replaceWith('<select name="schoolID" class="wpcf7-form-control wpcf7-select" id="UI_schoolID" aria-invalid="false" tabindex="-1" title="" style="display: none;"></select>');
            
            var oOption, UI_schoolID_select = document.getElementById('UI_schoolID');

            if (('' == $('#UI_cityID').val() || -1 == $('#UI_cityID').val()) && (('' == $('#UI_areaID').val() || -1 == $('#UI_areaID').val())) )
            {
                $('#UI_regionID').change();
            }
            else
            {
                oOption = document.createElement('OPTION');
                oOption.text  = '---';
                oOption.value = '';
                UI_schoolID_select.options.add(oOption);

                $.get('/schools/all', { areaID: $('#UI_areaID').val(), cityID: $('#UI_cityID').val() }, function(tmpData)
                {
                    var oOption;
               
                    if (tmpData && 1 == tmpData['status'])
                    {
                        for (var i in tmpData['results'])
                        {
                            oOption = document.createElement('OPTION');
                            oOption.text  = tmpData['results'][i]['name'];
                            oOption.value = tmpData['results'][i]['schoolID'];
               
                            UI_schoolID_select.options.add(oOption);
                        }
                    }
               
                    oOption = document.createElement('OPTION');
                    oOption.text  = 'Моей школы нет в списке';
                    oOption.value = -1;
               
                    UI_schoolID_select.options.add(oOption);
               
                    $('#UI_schoolID').select2();
                    $('#UI_schoolID').prev().show();

                }, 'json');
            }
            
        });

        $('#UI_areaID').change(function()
        {
            $('#UI_cityID').empty();

            $('#UI_schoolID').empty();
            $('#UI_schoolID').prev().remove();
            $('#UI_schoolID').replaceWith('<select name="schoolID" class="wpcf7-form-control wpcf7-select" id="UI_schoolID" aria-invalid="false" tabindex="-1" title="" style="display: none;"></select>');
            
            var oOption, 
                UI_cityID_select = document.getElementById('UI_cityID'),
                UI_schoolID_select = document.getElementById('UI_schoolID');

            if ('' == $('#UI_areaID').val() || -1 == $('#UI_areaID').val())
            {
                $('#UI_regionID').change();
            }
            else
            {
                 oOption = document.createElement('OPTION');
                 oOption.text  = '---';
                 oOption.value = '';
                 UI_schoolID_select.options.add(oOption);

                 $('#UI_schoolID').select2();
                 $('#UI_schoolID').prev().show();
                
                 oOption = document.createElement('OPTION');
                 oOption.text  = '---';
                 oOption.value = '';
                 UI_cityID_select.options.add(oOption);

                 $.get('/cities/all', { regionID: $('#UI_regionID').val(), areaID: $('#UI_areaID').val()}, function(tmpData)
                 {
                     var oOption;
                
                     if (tmpData && 1 == tmpData['status'])
                     {
                         for (var i in tmpData['results'])
                         {
                             oOption = document.createElement('OPTION');
                             oOption.text  = tmpData['results'][i]['name'];
                             oOption.value = tmpData['results'][i]['cityID'];
                
                             UI_cityID_select.options.add(oOption);
                         }
                     }
                
                     oOption = document.createElement('OPTION');
                     oOption.text  = 'Моего города/поселка нет в списке';
                     oOption.value = -1;
                
                     UI_cityID_select.options.add(oOption);
                
                     $('#UI_cityID').select2();
                
                 }, 'json');
            }
        });

        $('#UI_regionID').change(function()
        {
            $('#UI_areaID').empty();
            $('#UI_cityID').empty();
            $('#UI_libraryID').empty();

            $('#UI_schoolID').empty();
            $('#UI_schoolID').prev().remove();
            $('#UI_schoolID').replaceWith('<select name="schoolID" class="wpcf7-form-control wpcf7-select" id="UI_schoolID" aria-invalid="false" tabindex="-1" title="" style="display: none;"></select>');
            
            var oOption, 
                UI_areaID_select = document.getElementById('UI_areaID'),
                UI_cityID_select = document.getElementById('UI_cityID'),
                UI_libraryID_select = document.getElementById('UI_libraryID'),
                UI_schoolID_select = document.getElementById('UI_schoolID');

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_areaID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_cityID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_libraryID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_schoolID_select.options.add(oOption);

            if ('' == $('#UI_regionID').val() || -1 == $('#UI_regionID').val())
            {
                oOption = document.createElement('OPTION');
                oOption.text  = 'Моего района нет в списке';
                oOption.value = -1;
                UI_areaID_select.options.add(oOption);
                
                $('#UI_areaID').select2();

                oOption = document.createElement('OPTION');
                oOption.text  = 'Моего города/поселка нет в списке';
                oOption.value = -1;
                UI_cityID_select.options.add(oOption);
                
                $('#UI_cityID').select2();

                oOption = document.createElement('OPTION');
                oOption.text  = 'Библиотеки нет в списке';
                oOption.value = -1;
                UI_libraryID_select.options.add(oOption);
                
                $('#UI_libraryID').select2();

                oOption = document.createElement('OPTION');
                oOption.text  = 'Моей школы нет в списке';
                oOption.value = -1;
                UI_schoolID_select.options.add(oOption);
                
                $('#UI_schoolID').select2();
                $('#UI_schoolID').prev().show();

                $('#UI_areaID').parent().parent().parent().show();
                $('#UI_cityID').parent().parent().parent().show();
            }
            else
            {
                if ($('#UI_regionID').val() == 77 || $('#UI_regionID').val() == 78 )
                {
                    $('#UI_areaID').parent().parent().parent().hide();
                    $('#UI_cityID').parent().parent().parent().hide();
                    
                    $('#UI_schoolID').empty();
                    $('#UI_schoolID').prev().remove();
                    $('#UI_schoolID').replaceWith('<input class="wpcf7-form-control wpcf7-select" type="hidden" name="schoolID" value="" id="UI_schoolID" />');
                    
                    $('#UI_schoolID').select2({
                        ajax: {
                            url: '/schools/search',
                            dataType: 'json',
                            quietMillis: 250,
                            method: 'GET',
                            data: function (searchTerm, pageNumber, context) {
                                
                                console.log(searchTerm);
                                
                                return {
                                    q: searchTerm,
                                    page: pageNumber,
                                    regionID: $('#UI_regionID').val()

                                };
                            },
                            results: function (remoteData, pageNumber, query) {
                                console.log(remoteData.q + '!' + query.q + '!' + pageNumber);
                                
                                // parse the results into the format expected by Select2
                                // since we are using custom formatting functions we do not need to
                                // alter the remote JSON data, except to indicate that infinite
                                // scrolling can be used
                                pageNumber = pageNumber || 1;
                       
                                return {
                                    results: remoteData.items,
                                    pagination: {
                                        more: (pageNumber * 30) < remoteData.total_count
                                    }
                                };
                            },
                            cache: true
                        },
                        minimumInputLength: 1
                    });

                    $('#UI_schoolID').prev().show();
    
                }
                else if ($('#UI_regionID').val() == 92)
                {
                    $('#UI_areaID').parent().parent().parent().hide();
                    $('#UI_cityID').parent().parent().parent().hide();
                    
                    $.get('/schools/all', { regionID: $('#UI_regionID').val() }, function(tmpData)
                    {
                        var oOption;
                   
                        if (tmpData && 1 == tmpData['status'])
                        {
                            for (var i in tmpData['results'])
                            {
                                oOption = document.createElement('OPTION');
                                oOption.text  = tmpData['results'][i]['name'];
                                oOption.value = tmpData['results'][i]['schoolID'];
                   
                                UI_schoolID_select.options.add(oOption);
                            }
                        }
                   
                        oOption = document.createElement('OPTION');
                        oOption.text  = 'Моей школы нет в списке';
                        oOption.value = -1;
                   
                        UI_schoolID_select.options.add(oOption);
                   
                        $('#UI_schoolID').select2();
                        $('#UI_schoolID').prev().show();
                   
                    }, 'json');
                }
                else
                {
                    $('#UI_areaID').parent().parent().parent().show();
                    $('#UI_cityID').parent().parent().parent().show();
                    
                    oOption = document.createElement('OPTION');
                    oOption.text  = 'Моей школы нет в списке';
                    oOption.value = -1;
                    UI_schoolID_select.options.add(oOption);
                    
                    $('#UI_schoolID').select2();
                    $('#UI_schoolID').prev().show();
                }

                $.get('/areas/all', { regionID: $('#UI_regionID').val() }, function(tmpData)
                {
                    var oOption;
               
                    if (tmpData && 1 == tmpData['status'])
                    {
                        for (var i in tmpData['results'])
                        {
                            oOption = document.createElement('OPTION');
                            oOption.text  = tmpData['results'][i]['name'];
                            oOption.value = tmpData['results'][i]['areaID'];
               
                            UI_areaID_select.options.add(oOption);
                        }
                    }
               
                    oOption = document.createElement('OPTION');
                    oOption.text  = 'Моего района нет в списке';
                    oOption.value = -1;
               
                    UI_areaID_select.options.add(oOption);
               
                    $('#UI_areaID').select2();

                }, 'json');

                $.get('/cities/all', { regionID: $('#UI_regionID').val() }, function(tmpData)
                {
                    var oOption;
               
                    if (tmpData && 1 == tmpData['status'])
                    {
                        for (var i in tmpData['results'])
                        {
                            oOption = document.createElement('OPTION');
                            oOption.text  = tmpData['results'][i]['name'];
                            oOption.value = tmpData['results'][i]['cityID'];
               
                            UI_cityID_select.options.add(oOption);
                        }
                    }
               
                    oOption = document.createElement('OPTION');
                    oOption.text  = 'Моего города/поселка нет в списке';
                    oOption.value = -1;
               
                    UI_cityID_select.options.add(oOption);
               
                    $('#UI_schoolID').select2();

                }, 'json');


                $.get('/librarys/all', { regionID: $('#UI_regionID').val() }, function(tmpData)
                {
                    var oOption;
               
                    if (tmpData && 1 == tmpData['status'])
                    {
                        for (var i in tmpData['results'])
                        {
                            oOption = document.createElement('OPTION');
                            oOption.text  = tmpData['results'][i]['name'];
                            oOption.value = tmpData['results'][i]['cityID'];
               
                            UI_libraryID_select.options.add(oOption);
                        }
                    }
               
                    oOption = document.createElement('OPTION');
                    oOption.text  = 'Библиотеки нет в списке';
                    oOption.value = -1;
               
                    UI_libraryID_select.options.add(oOption);
               
                    $('#UI_libraryID').select2();

                }, 'json');
            }
        });

        $('#UI_countryID').change(function()
        {
            $('#UI_regionID').empty();
            $('#UI_areaID').empty();
            $('#UI_cityID').empty();
            
            $('#UI_schoolID').empty();
            $('#UI_schoolID').prev().remove();
            $('#UI_schoolID').replaceWith('<select name="schoolID" class="wpcf7-form-control wpcf7-select" id="UI_schoolID" aria-invalid="false" tabindex="-1" title="" style="display: none;"></select>');
            
            var oOption, 
                UI_regionID_select = document.getElementById('UI_regionID'),
                UI_areaID_select = document.getElementById('UI_areaID'),
                UI_cityID_select = document.getElementById('UI_cityID'),
                UI_libraryID_select = document.getElementById('UI_libraryID'),
                UI_schoolID_select = document.getElementById('UI_schoolID');

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_regionID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_areaID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_cityID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_libraryID_select.options.add(oOption);

            oOption = document.createElement('OPTION');
            oOption.text  = '---';
            oOption.value = '';
            UI_schoolID_select.options.add(oOption);

            $('#UI_areaID').select2();
            $('#UI_cityID').select2();
            $('#UI_libraryID').select2();
            
            $('#UI_schoolID').select2();
            $('#UI_schoolID').prev().show();

            if ('' == $('#UI_countryID').val() || -1 == $('#UI_countryID').val())
            {
                oOption = document.createElement('OPTION');
                oOption.text  = 'Моего региона нет в списке';
                oOption.value = -1;
                UI_regionID_select.options.add(oOption);
                
                $('#UI_regionID').select2();
            }
            else
            {
                $.get('/regions/all', { countryID: $('#UI_countryID').val() }, function(tmpData)
                {
                    var oOption;
               
                    if (tmpData && 1 == tmpData['status'])
                    {
                        for (var i in tmpData['results'])
                        {
                            oOption = document.createElement('OPTION');
                            oOption.text  = tmpData['results'][i]['name'];
                            oOption.value = tmpData['results'][i]['rID'];
               
                            UI_regionID_select.options.add(oOption);
                        }
                    }
               
                    oOption = document.createElement('OPTION');
                    oOption.text  = 'Моего региона нет в списке';
                    oOption.value = -1;
               
                    UI_regionID_select.options.add(oOption);
               
                    $('#UI_regionID').select2();

                }, 'json');
            }
        });

        $.get('/countries/all', { }, function(tmpData)
        {
            // var data = [{id: -1, text: 'Моей страны нет в списке'}];
            var UI_countryID_select = document.getElementById('UI_countryID');
        
            var oOption;
        
            if (tmpData && 1 == tmpData['status'])
            {
                for (var i in tmpData['results'])
                {
                    oOption = document.createElement('OPTION');
                    oOption.text  = tmpData['results'][i]['name'];
                    oOption.value = tmpData['results'][i]['countryID'];
        
                    UI_countryID_select.options.add(oOption);
                    // data[data.length] = {id: countryID, text: tmpData['results'][countryID]['name']}
                }

                $('#UI_countryID').val(201);
                $('#UI_countryID').change();
            }
        
            oOption = document.createElement('OPTION');
            oOption.text  = 'Моей страны нет в списке';
            oOption.value = -1;
        
            UI_countryID_select.options.add(oOption);

            $('#UI_countryID').select2();
        
        }, 'json');

    });
    </script>

    <script type="text/javascript">
	(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-155577-dzaHd';
    </script>
</head>

<body <?php body_class();?>>


<?php 
if((!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') && flow_elated_options()->getOptionValue('smooth_page_transitions') == "yes") {
    $ajax_class = flow_elated_options()->getOptionValue('smooth_pt_true_ajax') === 'no' ? 'mimic-ajax' : 'ajax';
?>
<div class="eltd-smooth-transition-loader <?php echo esc_attr($ajax_class); ?>">
    <?php if(flow_elated_options()->getOptionValue('enable_preloader_logo') == "yes") { ?>
        <img class="eltd-normal-logo eltd-preloader-logo" src="<?php echo esc_url(flow_elated_get_preloader_logo()); ?>" alt="<?php esc_html_e('Logo','flow'); ?>"/>
    <?php } ?>
    <div class="eltd-st-loader">
        <div class="eltd-st-loader1">
            <?php flow_elated_loading_spinners(); ?>
        </div>
    </div>
</div>
<?php } ?>

<div class="eltd-wrapper">
    <div class="eltd-wrapper-inner">
        <?php
        if (!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') {
            flow_elated_get_header();
        }
        ?>

        <?php if ((!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') && flow_elated_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='eltd-back-to-top'  href='#'>
                <span class="eltd-icon-stack"></span>
                <span class="eltd-back-to-top-text"><?php esc_html_e('Наверх', 'flow'); ?></span>
                <span class="arrow_carrot-up eltd-back-to-top-arrow"></span>
            </a>
        <?php } ?>

        <div class="eltd-content" <?php flow_elated_content_elem_style_attr(); ?>>
            <?php if(flow_elated_is_ajax_enabled()) { ?>
            <div class="eltd-meta">
                <?php do_action('flow_elated_ajax_meta'); ?>
                <span id="eltd-page-id"><?php echo esc_html($wp_query->get_queried_object_id()); ?></span>
                <div class="eltd-body-classes"><?php echo esc_html(implode( ',', get_body_class())); ?></div>
            </div>
            <?php } ?>
            <div class="eltd-content-inner">
<?php
/*
  * Template Name:  Интеграция Asterisk с Active Directory
  */

get_header();

?>
<section class="integr_top">
    <div class="wrapper">
        <h1 class="integr_top_title">
            Интеграция Asterisk с <span class="accent">Active Directory</span>
        </h1>
        <div class="integr_top_descr">
            Как с помощью связки <span class="accent seven_hundred">Asterisk</span> и <span class="accent seven_hundred">Active Directory</span> отслеживать, контролировать и управлять абонентами IP-АТС
        </div>
        <a class="mouseWheel" href="#nextBlock" rel="m_PageScroll2id"></a>
    </div>
</section>
<section class="integr_support" id="nextBlock">
    <div class="wrapper">
        <div class="integr_support_left">
            <div class="integr_support_title">
                <span class="seven_hundred">Asterisk</span> поддерживает возможность подключения к
                <span class="seven_hundred">серверу Active Directory</span> для загрузки информации на IP-АТС.
            </div>
            <div class="integr_support_description">
                Преимущество связки Asterisk и Active Directory сразу станет очевидным, как только вы начнете
                пользоваться интеграцией, которая позволит значительно сократить административные издержки
                управления пользователями.
            </div>
        </div>
        <img src="/wp-content/themes/voxlink/images/integr/Img_comp.jpg" alt="" class="integr_support_img">
    </div>
</section>
<section class="integr_whom">
    <div class="wrapper">
        <div class="integr_whom_title">Кому может быть полезна интеграция?</div>
        <div class="integr_whom_description">Когда интеграция Asterisk с Active Directory действительно нужна?</div>
        <div class="integr_whom_items">
            <div class="integr_whom_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon-1.png" alt="" class="integr_whom_item_img">
                <div class="integr_whom_item_span">
                    У вас достаточно крупная компания и вы цените автоматизацию рутинных процессов.
                </div>
            </div>
            <div class="integr_whom_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon-2.png" alt="" class="integr_whom_item_img">
                <div class="integr_whom_item_span">
                    Вы уже используете Active Directory и Asterisk, но не настроили их связку.
                </div>
            </div>
            <div class="integr_whom_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon-3.png" alt="" class="integr_whom_item_img">
                <div class="integr_whom_item_span">
                    Вы уже пользуетесь Active Directory и планируете внедрять Asterisk, продумывая всё до мелочей.
                </div>
            </div>
            <div class="integr_whom_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon-4.png" alt="" class="integr_whom_item_img">
                <div class="integr_whom_item_span">
                    У вас есть или вот-вот появится Asterisk и планируется внедрение Active Directory.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="integr_kind">
    <div class="wrapper">
        <div class="integr_kind_title">Какие требования, что нужно для интеграции</div>
        <div class="iintegr_kind_description">
            Для интеграции используется специально разработанный модуль Asterisk ADvantage, который выбирает данные из
            Active Directory и передаёт приложениям, связанным с Asterisk.
        </div>
        <div class="integr_kind_items">
            <div class="integr_kind_item">
                <div class="integr_kind_item_span">
                    <span class="seven_hundred">Asterisk ADvantage может выбирать данные из нескольких доменов AD.</span>
                    Для каждого из доменов потребуется учётная запись с правами на чтение LDAP – её должен предоставить
                    администратор домена AD. Обязательным условием успешной интеграции является то, что для пользователей
                    должны быть прописаны внутренние номера в Active Directory.
                </div>
                <div class="integr_kind_item_bottom">
                    <img src="/wp-content/themes/voxlink/images/integr/Img-phones.png" alt="" class="integr_kind_item_img">
                    <div class="integr_kind_item_bottom_span">
                        Что же касается требований к телефонии, то обязательным является наличие
                        <span class="bgr_accent">Asterisk и FreePBX 13+ версий.</span> Также для IP-АТС должен быть
                        открыт доступ к службам AD: DNS, Kerberos, LDAP.
                    </div>
                    <img src="/wp-content/themes/voxlink/images/integr/FreePBX.jpg" alt="" class="integr_kind_item_bottom_img">
                </div>

            </div>
            <img src="/wp-content/themes/voxlink/images/integr/ADvantage.jpg" alt="" class="integr_kind_img">
        </div>
    </div>
</section>
<section class="integr_capabilities">
    <div class="wrapper">
        <div class="integr_capabilities_title">
            Возможности интеграции
        </div>
        <div class="integr_capabilities_description">
            Интеграция IP-АТС на базе Asterisk с Active Directory через <span class="seven_hundred">модуль Asterisk
            ADvantage</span> позволяет:
        </div>
        <div class="capabilities_items_block">
            <div class="capabilities_items">
                <div class="capabilities_item">
                    <img src="/wp-content/themes/voxlink/images/integr/Icon-5.png" alt="" class="capabilities_item_img">
                    <div class="capabilities_item_span">
                        создавать номера в FreePBX (в частности, можно создавать/не создавать определённый пул номеров,
                        это указывается в настройках)
                    </div>
                </div>
                <div class="capabilities_item">
                    <img src="/wp-content/themes/voxlink/images/integr/Icon-6.png" alt="" class="capabilities_item_img">
                    <div class="capabilities_item_span">
                        настроить переадресацию вызова с номера в FreePBX, указать протокол подключения, контекст
                        вызова, указать кодеки, настройки NAT, ACL (номера будут добавляться в FreePBX с этими
                        параметрами)
                    </div>
                </div>
                <div class="capabilities_item">
                    <img src="/wp-content/themes/voxlink/images/integr/Icon-7.png" alt="" class="capabilities_item_img">
                    <div class="capabilities_item_span">
                        при звонке на телефон передавать имя из AD (имена из AD будут назначены номерам,
                        заведённым в FreePBX)
                    </div>
                </div>
            </div>
            <img src="/wp-content/themes/voxlink/images/integr/asterisk_adventure_06.jpg" alt="" class="capabilities_items_block_img">
        </div>
        <div class="capabilities_items_block">
            <img src="/wp-content/themes/voxlink/images/integr/asterisk_adventure_08.jpg" alt="" class="capabilities_items_block_img">
            <div class="capabilities_items">
                <div class="capabilities_item">
                    <img src="/wp-content/themes/voxlink/images/integr/Icon-8.png" alt="" class="capabilities_item_img">
                    <div class="capabilities_item_span">
                        при исходящем с телефона вызове отображать имя набранного номера из AD (если телефон
                        поддерживает Remote-Party-ID или P-Asserted-Identity)
                    </div>
                </div>
                <div class="capabilities_item">
                    <img src="/wp-content/themes/voxlink/images/integr/Icon-9.png" alt="" class="capabilities_item_img">
                    <div class="capabilities_item_span">
                        задавать ограничения на связь по принадлежности пользователей AD к определённым группам,
                        например, разрешать международные вызовы определённым пользователям
                    </div>
                </div>
                <div class="capabilities_item">
                    <img src="/wp-content/themes/voxlink/images/integr/Icon-10.png" alt="" class="capabilities_item_img">
                    <div class="capabilities_item_span">
                        передавать фотографию пользователя, привязанную к его аккаунту в AD (при поддержке данной
                        возможности телефонным аппаратом)
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alternative_wrapper">
        <div class="wrapper">
            <div class="alternative_capabilities">
                <div class="alternative_capabilities_title">
                    Также возможна <span class="yellow">доработка модуля интеграции</span> для реализации специфических задач.
                </div>
                <div class="alternative_capabilities_description">
                    <span class="seven_hundred">Сроки и стоимость</span> доработок оценит менеджер, ознакомившись с полным перечнем пожеланий заказчика.
                </div>
            </div>
            <img src="/wp-content/themes/voxlink/images/integr/shema.png" alt="" class="alternative_capabilities_img">
        </div>
    </div>
</section>
<section class="integr_example">
    <div class="wrapper">
        <div class="example_title">
            Примеры реализованных доработок
        </div>
        <div class="example_description">
            которые теперь входят в базовый функционал <span class="seven_hundred">модуля Asterisk ADvantage</span>
        </div>
        <div class="example_items">
            <div class="example_item">
                <img src="/wp-content/themes/voxlink/images/integr/ADvantage_01.jpg" alt="" class="example_item_img">
                <div class="example_item_bottom">
                    <img src="/wp-content/themes/voxlink/images/integr/Check.jpg" alt="" class="example_item_bottom_check">
                    <div class="example_item_bottom_content">
                        <div class="example_item_bottom_control">
                            <a href="#ADvantage_01_1" class="example_item_control active" data-anti="#ADvantage_01_2">Что сделано:</a>
                            <a href="#ADvantage_01_2" class="example_item_control" data-anti="#ADvantage_01_1">Для чего:</a>
                        </div>
                        <div class="example_item_content active" id="ADvantage_01_1">
                            В дополнительные атрибуты AD прописывается MAC адрес и модель телефонных аппаратов, которыми
                            пользуется заказчик. На основании полученных данных вместе с заведением внутреннего номера
                            генерируется конфигурационный файл для аппарата.
                        </div>
                        <div class="example_item_content" id="ADvantage_01_2">
                            Настройка IP-телефонов происходит без участия пользователей или системного администратора.
                        </div>
                    </div>
                </div>
            </div>
            <div class="example_item">
                <img src="/wp-content/themes/voxlink/images/integr/ADvantage_02.jpg" alt="" class="example_item_img">
                <div class="example_item_bottom">
                    <img src="/wp-content/themes/voxlink/images/integr/Check.jpg" alt="" class="example_item_bottom_check">
                    <div class="example_item_bottom_content">
                        <div class="example_item_bottom_control">
                            <a href="#ADvantage_02_1" class="example_item_control active" data-anti="#ADvantage_02_2">Что сделано:</a>
                            <a href="#ADvantage_02_2" class="example_item_control" data-anti="#ADvantage_02_1">Для чего:</a>
                        </div>
                        <div class="example_item_content active" id="ADvantage_02_1">
                            Перемещение в ограниченный контекст номеров, соответствующих отключенным учётным записям AD.
                        </div>
                        <div class="example_item_content" id="ADvantage_02_2">
                            Данная доработка позволяет блокировать учетные записи уволенных сотрудников на IP-АТС.
                        </div>
                    </div>
                </div>
            </div>
            <div class="example_item">
                <img src="/wp-content/themes/voxlink/images/integr/ADvantage_03.jpg" alt="" class="example_item_img">
                <div class="example_item_bottom">
                    <img src="/wp-content/themes/voxlink/images/integr/Check.jpg" alt="" class="example_item_bottom_check">
                    <div class="example_item_bottom_content">
                        <div class="example_item_bottom_control">
                            <a href="#ADvantage_03_1" class="example_item_control active" data-anti="#ADvantage_03_2">Что сделано:</a>
                            <a href="#ADvantage_03_2" class="example_item_control" data-anti="#ADvantage_03_1">Для чего:</a>
                        </div>
                        <div class="example_item_content active" id="ADvantage_03_1">
                            Если в AD за пользователем закреплён мобильный номер, указывать данный номер в Follow Me.
                        </div>
                        <div class="example_item_content" id="ADvantage_03_2">
                            Позволяет организовать удобный безусловный перевод всех входящих вызовов на мобильный номер сотрудника.
                        </div>
                    </div>
                </div>
            </div>
            <div class="example_item">
                <img src="/wp-content/themes/voxlink/images/integr/ADvantage_04.jpg" alt="" class="example_item_img">
                <div class="example_item_bottom">
                    <img src="/wp-content/themes/voxlink/images/integr/Check.jpg" alt="" class="example_item_bottom_check">
                    <div class="example_item_bottom_content">
                        <div class="example_item_bottom_control">
                            <a href="#ADvantage_04_1" class="example_item_control active" data-anti="#ADvantage_04_2">Что сделано:</a>
                            <a href="#ADvantage_04_2" class="example_item_control" data-anti="#ADvantage_04_1">Для чего:</a>
                        </div>
                        <div class="example_item_content active" id="ADvantage_04_1">
                            Для номеров, задвоенных в AD, указывать в имени FreePBX название отдела.
                        </div>
                        <div class="example_item_content" id="ADvantage_04_2">
                            Полезно в том случае, когда у нескольких сотрудников один внутренний номер.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="integr_functions">
    <div class="wrapper">
        <div class="functions_title">Дополнительный функционал</div>
        <div class="functions_description">
            Еще больше возможностей интеграция IP-АТС на базе Asterisk с Active Directory даёт за счет использования
            телефонной книги CallMetrix.
        </div>
        <div class="functions_items">
            <img src="/wp-content/themes/voxlink/images/integr/asterisk_adventure_05.jpg" alt="" class="functions_item">
            <div class="functions_item">
                <div class="functions_item_title">При её наличии интеграция позволяет:</div>
                <div class="functions_item_li">
                    <div class="functions_item_li_circle"></div>
                    <div class="functions_item_li_span">
                        отображать номера, синхронизированные с AD, с CallMetrix;
                    </div>
                </div>
                <div class="functions_item_li">
                    <div class="functions_item_li_circle"></div>
                    <div class="functions_item_li_span">
                        передавать из AD в CallMetrix почту, информацию об отделах, номер, имя, мобильный номер, фото
                        (если данная информация содержится в AD в соответствующем атрибуте);
                    </div>
                </div>
                <div class="functions_item_li">
                    <div class="functions_item_li_circle"></div>
                    <div class="functions_item_li_span">
                        раздавать справочник номеров на некоторые модели телефонов, составленный по данным из AD. На
                        телефонах как правило выполняется донастройка, желателен провиженинг.
                    </div>
                </div>
                <div class="functions_item_block">
                    Для знакомства с <span class="seven_hundred">телефонной книгой CallMetrix</span> вы можете запросить
                    доступ к <a href="#">демо стенду</a>. Чтобы его организовать нам потребуется IP адрес, с которого вы будете подключаться.
                </div>
            </div>
        </div>
    </div>
    <div class="functions_wrapper">
        <div class="wrapper">
            <div class="integr_functions_items">
                <div class="integr_functions_item">
                    Стоит отметить, что кроме сказанного, система телефонии на базе Asterisk и телефонная книга
                    CallMetrix интегрируется по протоколу LDAP, что позволяет интегрироваться с любой службой каталогов,
                    например <span class="seven_hundred">Novell eDirectory, Netscape Directory Service</span> или
                    некоммерческой <span class="seven_hundred">OpenLDAP</span> и основанными на ней российскими
                    разработками.
                </div>
                <div class="integr_functions_item">
                    Необходимо учитывать, что номенклатура таких каталогов может отличаться от Active Directory и
                    интеграция потребует увеличения стоимости, сроков и проработки технического задания.
                </div>
            </div>
            <img src="/wp-content/themes/voxlink/images/integr/sloi.png" alt="" class="integr_functions_item_img">
        </div>
    </div>
</section>
<section class="integr_time">
    <div class="wrapper">
        <div class="time_title">Сколько занимает времени</div>
        <div class="time_items">
            <div class="time_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon_01.png" alt="" class="time_item_img">
                <div class="time_item_title">Интеграция</div>
                <div class="time_item_description">
                    Интеграция IP-АТС Asterisk с Active Directory является популярной услугой. При готовности заказчика
                    оперативно предоставить всю необходимую информацию и доступы, а также общей готовности Active Directory,
                </div>
                <div class="time_item_seven">сроки интеграции составят 3-5 дней.</div>
            </div>
            <div class="time_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon_2.png" alt="" class="time_item_img">
                <div class="time_item_title">Стоимость</div>
                <div class="time_item_description">
                    Стоимость базовой интеграции составляет:
                </div>
                <div class="time_item_bold">50 000 рублей</div>
                <div class="time_item_description">
                    При этом финальную цену поможет определить менеджер, после согласования всех требований, деталей и
                    заданных заказчиком условий интеграции.
                </div>
            </div>
            <div class="time_item">
                <img src="/wp-content/themes/voxlink/images/integr/Icon_03.png" alt="" class="time_item_img">
                <div class="time_item_title">Доработка</div>
                <div class="time_item_description">
                    А вот доработки интеграции оцениваются отдельно как в плане бюджета, так и в плане сроков.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="integr_send">
    <div class="wrapper">
        <div class="integr_send_item">
            <div class="integr_send_title">Что потребуется для интеграции</div>
            <div class="integr_send_description">
                Для того чтобы заказать услугу интеграции IP-АТС на базе Asterisk с Active Directory
                <span class="seven_hundred">обратитесь к нашим специалистам</span>, оставив свои контактные данные в
                форме, после чего мы свяжемся с вами и пройдем вместе все этапы интеграции.
            </div>
        </div>
        <div class="integr_send_item" id="send-forms">
            <input type="text" class="send_input" name="name" placeholder="Имя" id="send_input_name">
            <input type="text" class="send_input" name="email" placeholder="Email" id="send_input_email">
            <input type="text" class="send_input" name="phone" placeholder="Телефон" id="send_input_phone">
            <div class="integr_send_item_bottom">
                <div class="integr_send_item_button">Отправить</div>
                <div class="integr_send_item_span">
                    Нажимая кнопку, ты разрешаешь обработку персональных данных и соглашаешься с <a href="/">политикой конфиденциальности</a>.
                </div>
            </div>
        </div>
        <div class="integr_send_item_success">
            Благодарим Вас за письмо! В ближайшие 15 минут с Вами свяжутся.
        </div>
    </div>
</section>
<?php
get_footer(); ?>

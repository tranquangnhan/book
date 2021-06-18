var firstIdCategory = $('.category').first().val(); 

var filterOb = [
    { 'type': ["1"] },
    { 'class': ["1"] },
    { 'category': [firstIdCategory] }
]

var timeRequest;

$('.filter').click(function (e) { 
    if ($('.box-on-top').hasClass('hide') == true) {
        $('.box-on-top').fadeIn(function() {
            $('.box-on-top').removeClass('hide');
        });
    }

    clearTimeout(timeRequest);

    e.preventDefault();
    var checkType = $(this).attr('data-type');

    if (checkType == 1) { // class
        let dataClass = filterOb[checkType].class;
        var keyFilter = $(this).text(); 

        if (keyFilter == 'Mầm Non') { keyFilter = 0; }

        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');

            findAndDeleteItemInArray(dataClass, keyFilter);
        } else {
            $(this).parent().addClass('active');                 
            dataClass.push(keyFilter);            
        }                            
    } 
    
    else {
        var keyFilter = $(this).val();
       
        var data = getDataByTypeCheck(checkType);

        if ($(this).parent().hasClass('btn-primary')) {  // remove
            $(this).parent().removeClass('btn-primary');
            $(this).parent().addClass('btn-dark');

            findAndDeleteItemInArray(data, keyFilter);
        } else { // add
            $(this).parent().removeClass('btn-dark');
            $(this).parent().addClass('btn-primary');

            data.push(keyFilter);   
        }        
    }

    timeRequest = setTimeout(
        function() { 
            setDataAndRequest(filterOb, 0);                        
        }, 600);   
});

function findAndDeleteItemInArray(array, find) {
    for (let i = 0; i < array.length; i++) {
        if (array[i] == find) {
            array.splice(i, 1);
        }
    }
}

function getDataByTypeCheck(checkType) {
    if (checkType == 0) {
        var data = filterOb[checkType].type;
    } else {
        var data = filterOb[checkType].category;
    }

    return data;
}

function getDataByFilterOb(data, url) {    
    $.ajax({
        type: 'POST',        
        url: url,
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,        
        data: data,
        success: function(response) {    
            console.log(response);        
            if (response) {
                $('.product-box .product-item').remove();

                response.forEach(element => {                    
                    var html = htmlProductItem(element);
                    $('.product-box').prepend(html);
                });
            }
            if ($('.box-on-top').hasClass('hide') == false) {
                $('.box-on-top').fadeOut(function() {
                    $('.box-on-top').addClass('hide');
                });                
            }
        },
        error: function(e) {
            Swal.fire({
                timer: 3000,
                type: 'error',
                title: 'Có lỗi xảy ra trong quá trình xử lý dữ liệu. Vui lòng tải lại trang !.',
                showConfirmButton: false,
                showCancelButton: false,
            });
        }
    });
}

function setDataAndRequest(filterOb, form) {
    var dataToSring = JSON.stringify(filterOb);

    var dataSend = new FormData();
    
    dataSend.append('filterOb', dataToSring);
    dataSend.append('form', form);
    dataSend.append('action', 'getData'); 
    url = 'controllers/ajax/product.php';
    
    getDataByFilterOb(dataSend, url);
}

function htmlProductItem(product) {
    var html = `
    <div class="col-md-4 d-flex product-item align-items-stretch ftco-animate fadeInUp ftco-animated">
        <div class="project-wrap">
            <a href="?act=productdetail&id=` + product['id'] + `" class="img" style="background-image: url(/book/site/views/assets/images/` + product['img'] + `);">
                <span class="price">Sách</span>
            </a>
            <div class="text p-4">
                <h3><a href="?act=productdetail&id=` + product['id'] + `">` + product['name'] + `</a></h3>
                <p class="advisor">Tác Giả: <span>` + product['author'] + `</span></p>
            </div>
        </div>
    </div>
    `;

    return html;
}
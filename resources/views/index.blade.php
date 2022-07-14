<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota Veloz Cross</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="./img/favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="home">
        <header id="header" class="header">
            <img class="banner kenburns-bottom" src="{{ asset('img/home/banner.JPG') }}" alt="banner">
            <div class="container h-100">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="container-fluid">
                        <nav class="navbar navbar-dark navbar-expand-lg align-items-start">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('img/general/logo.svg') }}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#introduction">CAR-TIME STORY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">FAMILY ON THE WAY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">HÀNH TRÌNH KHÁCH HÀNG</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="title text-center">
                        <p>VELOZ CROSS</p>
                    </div>
                    <div class="description text-center">
                        <p>Kéo xuống để khám phá câu chuyện</p>
                        <img src="{{ asset('img/general/icon-button.svg') }}" alt="">
                    </div>
                    <div class="d-flex flex-column tool">
                        <a id="scroll-to-top" class="btn">
                            <img src="{{ asset('img/general/arrow-up.svg') }}" alt="">
                        </a>
                        <a class="btn" data-bs-toggle="modal" data-bs-target="#toolModal">
                            <img src="./img/general/wheel.svg" alt="">
                        </a>
                        <a id="scroll-to-bottom" class="btn">
                            <img src="{{ asset('img/general/arrow-down.svg') }}" alt="">
                        </a>
                        <a href="https://www.toyota.com.vn/veloz-cross-cvt-top" target="_blank" class="btn">
                            <img src="{{ asset('img/general/global.svg') }}" alt="">
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="toolModal" tabindex="-1" aria-labelledby="toolModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xxl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row align-items-center">
                                        <form class="col-md-6">
                                            <h1 class="form-title">Đăng ký lái thử xe</h1>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="form-select" class="form-label">Tỉnh / Thành
                                                        phố*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-global-black.svg" alt="">
                                                        </span>
                                                        <select id="form-select" class="form-select" name="province">
                                                            <option value="">Chọn tỉnh / thành phố</option>
                                                            @foreach ($province as $itemProvince)
                                                                <option value="{{ $itemProvince['id'] }}">{{ $itemProvince['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="form-select" class="form-label">Đại lý liên hệ*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-home-black.svg" alt="">
                                                        </span>
                                                        <select id="form-select" class="form-select" name="dealer">
                                                            <option value="">Đại lý liên hệ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="form-label">Họ và tên*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-user-black.svg" alt="">
                                                        </span>
                                                        <input type="text" class="form-control" id="name"  name="name"
                                                            placeholder="Nhập họ và tên">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="phone" class="form-label">Số điện thoại*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-phone-black.svg" alt="">
                                                        </span>
                                                        <input type="text" class="form-control" id="phone" name="phone"
                                                            placeholder="Nhập số điện thoại">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="email" class="form-label">Email</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-mail-black.svg" alt="">
                                                        </span>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="Nhập email">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <label for="form-select" class="form-label">Nhu cầu</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="{{ asset('img/general/icon-message-black.svg') }}" alt="">
                                                        </span>
                                                        <select id="form-select" class="form-select" name="to_buy">
                                                            <option value="">Dự định mua xe</option>
                                                            @foreach ($toBuy as $itemToBuy)
                                                                <option value="{{ $itemToBuy['name'] }}">{{ $itemToBuy['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-5">Bằng cách nhấp vào Đăng ký ngay, Khách hàng đồng ý gửi thông
                                                tin của mình tới
                                                Toyota Việt Nam. Toyota Việt Nam sẽ giữ, sử dụng và đảm bảo bảo mật
                                                thông tin khách hàng
                                                theo quy định pháp luật nhằm mục đích phục vụ và tư vấn khách hàng.</p>
                                            <div class="d-flex justify-content-center align-content-center form-action save-data" style="cursor: pointer;">
                                                <button class="btn" type="submit">Đăng ký ngay</button>
                                            </div>
                                        </form>
                                        <div class="col-lg-6 text-center">
                                            <img src="{{ asset('img/home/form-image.png') }}" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="introduction" class="introduction">
            <div class="container h-100 d-flex align-items-center">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <p class="title">TRONG TIỆN NGHI - NGOÀI PHONG CÁCH</p>
                    <p class="description mb-5">Vẻ ngoài thể thao, phong cách và hiện đại như một chiếc crossover thực
                        thụ là cảm giác lái mà Veloz Cross mang lại từ cái nhìn đầu tiên.
                        Thiết kế nội thất rộng rãi linh hoạt, tiện nghi ngập tràn khoang lái cùng với khả năng vận hành
                        êm ái, giúp chủ sở hữu dễ dàng di chuyển mọi lúc mọi nơi.
                        Công nghệ an toàn hàng đầu mang lại cảm giác an tâm trên mọi hành trình. Với những trang bị hiện
                        đại tiên tiến nhất phân khúc, Veloz Cross hứa hẹn sẽ là người bạn đồng hành đáng tin cậy của mỗi
                        gia đình.
                    </p>
                    <div class="row">
                        <a href="#monday" class="col-xl-2 col-lg-4 col-md-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-1.png') }}" alt="">
                        </a>
                        <a href="#tuesday" class="col-xl-2 col-lg-4 col-md-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-2.png') }}" alt="">
                        </a>
                        <a href="#wednesday" class="col-xl-2 col-lg-4 col-md-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-3.png') }}" alt="">
                        </a>
                        <a href="#thursday" class="col-xl-2 col-lg-4 col-md-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-4.png') }}" alt="">
                        </a>
                        <a href="#friday" class="col-xl-2 col-lg-4 col-md-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-5.png') }}" alt="">
                        </a>
                        <a href="#saturday" class="col-xl-2 col-lg-4 col-md-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-6.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="monday" class="week monday">
            <img class="background-section" src="{{ asset('img/home/thursday/2.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Những quyết định của Phương<br>
                                làm thay đổi cuộc đời Trường
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-right" data-aos-duration="1000">
                                Như đã hứa hôm nọ, hôm nay Trường kể cho cả nhà nghe về những kỉ niệm đáng yêu nhất của
                                2 vợ chồng mình. <br>
                                Hai đứa học chung cấp 2, hồi đó bạn bè lít nhít, đâu đã biết để ý gì. Lên cấp 3, mình
                                thầm thích nàng nhưng thực sự không đủ can đảm để bày tỏ, vì thấy khả năng “win” trái
                                tim nàng không cao.
                                Hồi đó, nàng không phải hotgirl nhưng luôn thu hút sự chú ý vì rất thông minh, sắc sảo
                                và hết mình vì bạn bè. Tình cảm cứ ấp ủ như thế đến một ngày mình liều mình bày tỏ
                                <p class="read-more" style="font-style: italic;">... Xem thêm</p>.
                                <span class="read-more-show">
                                    Nàng hỏi lại rất duyên: “Mày yêu tao thật á?” và thế là …xong, thành công! Hóa ra
                                    chỉ cần “nói thật”, là nàng gật đầu. <br>
                                    Tốt nghiệp cấp 3, mình dấn thân vào con đường người mẫu. Phương cùng gia đình chuẩn
                                    bị thu xếp đồ đạc qua định cư Đức, vẽ sẵn một tương lai tươi sáng.
                                    Mình không dám níu giữ vì thời điểm ấy không có gì để đảm bảo tương lai. Cứ tưởng là
                                    chuyện tình của vợ chồng mình kết thúc từ đó.
                                    Nhưng không, vào phút chót, nàng quyết định không đi Đức nữa mà ở lại Việt Nam cùng
                                    mình. Lúc ấy, Trường bất ngờ thật sự. <br>
                                    Giờ nhớ lại khoảnh khắc ấy, lòng vẫn thấy bồi hồi, xốn xang. Nhờ có quyết định ngày
                                    ấy của vợ, mà hai vợ chồng mới viết lên được chuyện tình lãng mạn như giờ.
                                    Ảnh này mới chụp, từ hồi “đưa em đi chơi xa, trên con xe tay ga” đến bây giờ là
                                    “trên Veloz Cross”, chúng mình vẫn không giảm độ ngọt thế này đây!
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu gọn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-easing="ease-in-sine">
                            <img class="image-main" src="{{ asset('img/home/thursday/2.JPG') }}" alt="">
                            <div class="slider">
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/thursday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/1.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/5.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mondayModal" tabindex="-1" aria-labelledby="mondayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="monday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/thursday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#monday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#monday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="tuesday" class="week tuesday">
            <img class="background-section" src="{{ asset('img/home/tuesday/2.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-left" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/tuesday/2.JPG') }}" alt="">
                            <div class="slider d-flex justify-content-between">
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/tuesday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/6.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/1.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Sự nghiệp thăng hoa nhờ có vợ làm hậu phương
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-left" data-aos-duration="1000">
                                Không nhiều người biết rằng cũng chính Phương là người đã “kéo” Trường ra khỏi nghề
                                người mẫu để “dẫn lối” mình đến nghiệp diễn xuất.
                                Mình đạt giải Siêu mẫu ăn ảnh tại cuộc thi Siêu mẫu năm 2004, nhưng Phương vẫn khuyên
                                “Anh nên thi đại học Sân khấu điện ảnh, sẽ có tương lai hơn”.
                                Năm hai đại học, mình có một vai diễn đầu tiên, Phương thức xuyên đêm để xem hết 20 tập
                                phim để góp ý về cách diễn làm sao cho sâu sắc và truyền cảm hứng hơn.<p
                                    class="read-more" style="font-style: italic;">... Xem thêm</p>
                                <span class="read-more-show">
                                    <br>
                                    Sau nhiều năm gắn bó trong nghề với sự ủng hộ của vợ từ đầu đến cuối, mình cũng đã
                                    có cho mình những vai diễn
                                    để đời và ghi dấu ấn trong lòng khán giả. <br>
                                    Mọi người hay bảo vợ khuyên gì thì làm ngược lại. Còn mình thì cứ y lời vợ mà làm,
                                    có làm sao không cả nhà? Đi xe này cũng là vì vợ bảo xe này nghe tả hơi bị giống
                                    anh: “trong tiện nghi, ngoài phong cách” ;
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu gọn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="tuesdayModal" tabindex="-1" aria-labelledby="tuesdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="tuesday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/tuesday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#tuesday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#tuesday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="wednesday" class="week wednesday">
            <img class="background-section" src="{{ asset('img/home/saturday/2.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                ĐÁM CƯỚI 1-0-2
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-up" data-aos-duration="1000">
                                Hôm nay cả nhà lên đường đi chơi. Đường xa nhưng xe chạy êm, lại thoáng rộng nên 2 chị
                                em hào hứng, cười đùa trêu nhau rất rôm rả.
                                Chip, Bon tự nhiên hỏi Bố nhớ nhất chuyến đi nào? Không hiểu sao dòng hồi tưởng của mình
                                lại quay ngay về chuyến đón cô dâu, tức mẹ của 2 đứa này cách đây gần 14 năm.<br>
                                Đầu tháng 11 năm ấy, người dân Hà Nội chứng kiến một trận lụt lịch sử.
                                Hôm đó, mình còn phải thi môn cuối trước khi tốt nghiệp Đại học Sân khấu điện ảnh. Mình
                                không tưởng<p class="read-more" style="font-style: italic;">... Xem thêm</p>
                                <span class="read-more-show">
                                    tượng nổi có ngày phải xắn quần lội vào trường làm bài thi. Càng không thể tin ngày
                                    cưới mình lại bì bõm lội tới nhà hàng, thay vội bộ comple để chờ cô dâu đến và đón
                                    khách.<br>
                                    Người ta lấy nhau ngày mưa thì nhiều vô kể nhưng chọn đúng ngày Hà Nội lụt thì mấy
                                    chục năm mới có một lần. Bố và mẹ Chip, Bon đúng là “định mệnh” của nhau rồi.<br>
                                    Nghe đến đây, 2 chị em Chíp – Bon thích thú cười khì.
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu gọn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-up" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/saturday/2.JPG') }}" alt="">
                            <div class="slider d-flex justify-content-between">
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/saturday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/6.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/1.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="wednesdayModal" tabindex="-1" aria-labelledby="wednesdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="wednesdayModalLabel">Hình chi tiết</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="wednesday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/saturday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#wednesday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#wednesday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="thursday" class="week thursday">
            <img class="background-section" src="{{ asset('img/home/sunday/4.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-left" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/sunday/4.JPG') }}" alt="">
                            <div class="slider">
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/sunday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/1.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/6.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Về nhà chồng nhé, có vợ chờ
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-left" data-aos-duration="1000">
                                Những lúc cả nhà được quay quần như thế này, mình lại nhớ có đợt phải quay phim xa nhà
                                lâu, rất lâu.<br>
                                Hồi đóng phim “Bí mật Tam giác vàng”, đoàn làm phim phải di chuyển liên tục ở ba nước
                                Lào - Campuchia - Myanmar qua hơn 10.000km.
                                Vì thời gian gấp rút, Trường phải xa nhà với thời gian dài kỉ kỷ lục: 4 tháng.
                                Khi đoàn quay ở Điện Biên, dù chỉ được nghỉ có ba ngày nhưng mình vẫn xin phép đạo diễn
                                cho về nhà thăm nhà.
                                Không gọi điện trước, khi mở cửa ra thấy mình, vợ rất bất<p class="read-more"
                                    style="font-style: italic;">... Xem thêm</p>
                                <span class="read-more-show">
                                    ngờ và lao vào ôm chầm lấy. Chắc ông chồng, ông bố nào cũng chỉ mong có người mong,
                                    người chờ mình trở về sau bao nhiêu vất vả công việc bên ngoài. <br>
                                    Bây giờ, nếu bối cảnh phim cách nhà dưới 100km, mình cũng sẽ tìm cách đi về trong
                                    ngày.
                                    Vì mình biết, ở nhà có vợ và 2 nhóc lúc nào cũng đợi bố về để cùng nhau làm những
                                    điều thật đơn giản: quây quần, ăn uống, trò chuyện. Giờ có Veloz Cross rồi, đi lại
                                    kiểu này cũng là easy game thôi.
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu gọn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="thursdayModal" tabindex="-1" aria-labelledby="thursdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="thursdayModalLabel">Hình chi tiết</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="thursday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/sunday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#thursday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#thursday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="friday" class="week friday">
            <img class="background-section" src="{{ asset('img/home/friday/3.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Nhìn con khôn lớn
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-right" data-aos-duration="1000">
                                Mình hay phải đi làm xa dài ngày nên 2 bạn này hay tâm sự với mẹ hơn.
                                Nhưng khi có bố ở nhà thì 2 chị em lại rất thích chơi với bố.
                                Có thể chỉ là rủ nhau trốn vào Veloz Cross để đùa nghịch cho thoải mái và tâm sự nhỏ to
                                đủ thứ chuyện.<br>
                                Thấy con khôn lớn, trưởng thành hơn từng ngày có lẽ là điều hạnh phúc nhất.
                                Hồi tham gia “Bố ơi, mình đi đâu thế”, Chíp mới 6 tuổi, khá ít nói và hay ngượng ngùng.
                                Có một thử thách 2 bố con phải ngủ trong ngôi nhà giữa cánh đồng ngô. Nhưng đến<p
                                    class="read-more" style="font-style: italic;">... Xem thêm</p>
                                <span class="read-more-show">
                                    tối Chip bắt đầu sợ vì ở đó rất tối và có nhiều côn trùng. Khi đi ngủ Chip lại khóc
                                    vì nhớ mẹ, phải dỗ mãi Chip mới ngủ. Sáng hôm sau các cặp bố con phải dậy từ 4h sáng
                                    để làm nhiệm vụ.
                                    Cuối cùng cả hai bố con đều ngủ quên và không hoàn thành được nhiệm vụ hôm đó. Bây
                                    giờ, con đã sắp tròn 13 tuổi, bơi lội như một nàng tiên cá, 3 ngày là “xử gọn” một
                                    bản piano, rất già đời “tra khảo” các vai diễn của bố.<br>
                                    Còn Bon thì càng lớn càng bộc lộ nét hài hước, duyên ngầm. Có lần rủ cậu diễn xuất
                                    làm mặt lạnh trên nền nhạc quẩy, mà cậu nhập tâm hơn cả bố.
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu gọn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-right" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/friday/3.JPG') }}" alt="">
                            <div class="slider">
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/friday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/1.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/5.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="fridayModal" tabindex="-1" aria-labelledby="fridayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="fridayModalLabel">Hình chi tiết</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="friday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/friday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#friday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#friday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="saturday" class="week saturday">
            <img class="background-section" src="{{ asset('img/home/wednesday/6.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-up" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/wednesday/6.JPG') }}" alt="">
                            <div class="slider d-flex">
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/wednesday/6.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/1.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Những món quà yêu thương
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-up" data-aos-duration="1000">
                                Điều cuối cùng mình muốn chia sẻ trong chuỗi những câu chuyện nhỏ về gia đình chính là
                                về bí quyết “giữ lửa” hôn nhân.
                                Sau 14, 15 năm “kinh nghiệm, mình đúc rút ra 3 cách, cách thứ 3 là dễ nhất nhé. <br>
                                Một là phải biết dỗ vợ bằng lời ngon tiếng ngọt. Hai là chia sẻ việc nhà.
                                Và ba là tặng không nhân dịp gì, tặng một cách bất ngờ.<br>
                                Nhiều người thắc mắc, nghi ngờ mình “sợ vợ” nên mới tặng vợ nhiều quà thế.
                                Mà đúng là tặng nhiều thật. Sinh nhật, kỉ niệm ngày cưới, valentine hay Noel thì<p
                                    class="read-more" style="font-style: italic;">... Xem thêm</p>
                                <span class="read-more-show">
                                    không nói làm gì. Sự khác biệt của mình là tết dương, tết âm, tết hàn thực, ông công
                                    ông táo, rằm tháng 7, trung thu, 1/6, 20/6, 20/11…vợ cũng được nhận quà.
                                    Một trong những lý do mình chọn Veloz Cross là vì cốp xe siêu rộng, mỗi lần mua quà
                                    tặng vợ là thoải mái “ship” quà về dù quà có to hay nhiều đến đâu ;<br>
                                    Thật ra, đó là…sự đầu tư cho niềm vui mọi người ạ. Điều gì làm nàng vui và bất ngờ
                                    thì mình sẽ luôn cố gắng thực hiện. Khi mẹ vui, cả nhà mới vui được.<br>
                                    Chip Bon có lần comment “Bố đúng là ngoài đẹp trai, trong chiều vợ”. Chịu khó chọn
                                    quà rồi được thấy vợ vui, con khen thì cũng thấy khá xứng đáng ;
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu gọn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="saturdayModal" tabindex="-1" aria-labelledby="saturdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="saturdayModalLabel">Hình chi tiết</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="saturday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/wednesday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#saturday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#saturday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="footer-banner" class="footer-banner">
            <img class="background" src="{{ asset('img/home/toyota-straight.JPG') }}" alt="">
            <div class="h-100 d-flex flex-column justify-content-end align-items-center">
                <div class="link">
                    <a href="#">
                        Hãy cùng nhau chờ đón câu chuyện tiếp theo
                    </a>
                    <img src="{{ asset('/img/general/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </section>

        <section id="form">
            <div class="container">
                <div class="row" style="background-color: #F9F9F9">
                    <div class="col-lg-7">
                        <form data-aos="zoom-in" data-aos-duration="1000">
                            <div class="form">
                                <h1 class="form-title">Đăng ký lái thử xe</h1>
                                <div class="row">
                                    <div class="col">
                                        <label for="form-select" class="form-label">Tỉnh / Thành phố*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-global-black.svg') }}" alt="">
                                            </span>
                                            <select id="form-select" class="form-select" name="province">
                                                <option value="">Chọn tỉnh / thành phố</option>
                                                @foreach ($province as $itemProvince)
                                                    <option value="{{ $itemProvince['id'] }}">{{ $itemProvince['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="form-select" class="form-label">Đại lý liên hệ*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-home-black.svg') }}" alt="">
                                            </span>
                                            <select id="form-select" class="form-select" name="dealer">
                                                <option value="">Đại lý liên hệ</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="name" class="form-label">Họ và tên*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-user-black.svg') }}" alt="">
                                            </span>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Nhập họ và tên">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="phone" class="form-label">Số điện thoại*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-phone-black.svg') }}" alt="">
                                            </span>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Nhập số điện thoại">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-mail-black.svg') }}" alt="">
                                            </span>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="form-select" class="form-label">Nhu cầu</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-message-black.svg') }}" alt="">
                                            </span>
                                            <select id="form-select" class="form-select" name="to_buy">
                                                <option value="">Dự định mua xe</option>
                                                @foreach ($toBuy as $itemToBuy)
                                                    <option value="{{ $itemToBuy['name'] }}">{{ $itemToBuy['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class="policy">Bằng cách nhấp vào Đăng ký ngay, Khách hàng đồng ý gửi thông tin của
                                    mình
                                    tới
                                    Toyota Việt Nam. Toyota Việt Nam sẽ giữ, sử dụng và đảm bảo bảo mật thông tin khách
                                    hàng
                                    theo quy định pháp luật nhằm mục đích phục vụ và tư vấn khách hàng.</p>
                                <div class="d-flex justify-content-center align-content-center form-action save-data" style="cursor: pointer;">
                                    <button class="btn" type="submit">Đăng ký ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in" data-aos-duration="1000" alt="">
                        <img class="form-section-image" src="{{ asset('img/home/form-image.png') }}">
                    </div>
                </div>
            </div>
        </section>
        <div class="toast" data-autohide="false" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                <rect fill="#007aff" width="100%" height="100%" /></svg>
                <strong class="mr-auto">Toyota</strong>
                <small class="text-muted">1 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div>
            <div class="toast-body">
                Đăng kí thành công !
            </div>
            </div>
        <footer id="footer" class="w-100 d-flex justify-content-center align-items-center">
            <span>© Bản quyền thuộc về công ty TOYOTA Việt Nam</span>
        </footer>

    </div>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $('body').on('click', '.save-data', function(e){
            e.preventDefault();
            let province = $(this).parent().find("select[name='province']").val();
            let dealer =  $(this).parent().find("select[name='dealer']").val();
            let name = $(this).parent().find("input[name='name']").val();
            let phone = $(this).parent().find("input[name='phone']").val();
            let email = $(this).parent().find("input[name='email']").val();
            let to_buy =  $(this).parent().find("select[name='to_buy']").val();
            let url = '{{ route('save-customer') }}';

            let data = {
                _token: "{{ csrf_token() }}",
                province: province,
                dealer: dealer,
                firstName: name,
                phoneNumber: phone,
                email: email,
                whenCustomerWantToBuy: (to_buy) ? to_buy : "Chưa xác định"
            }
            if (province.length == 0) {
                alert('Vui lòng chọn tỉnh/ thành phố!')
                return
            }
            if (dealer.length == 0) {
                alert('Vui lòng chọn đại lý!')
                return
            }
            if (name.length == 0) {
                alert('Vui lòng nhập họ tên!')
                return
            }
            var filter = /^[0-9]{9,13}$/;
            if (!filter.test(phone)) {
                alert('Số điện thoại phải là số và lớn hơn 9 kí tự!')
                return
            }

            saveData(url, data);
        })
        $('body').on('change', "select[name='province']", function() {
            let urlProvince = '{{ route('province') }}'
            let _this = $(this);
            $.ajax({
                url: urlProvince,
                data: {province:$(this).val()},
                method: "GET",
                success: function(result) {
                    var html = '';
                    if (result.length > 0) {
                        for (let i = 0; i < result.length; i++) {
                            if (result[i]['name']) {
                                html += '<option value="'+ result[i]['abbreviation'] +'">'+ result[i]['name'] +'</option>'
                            }
                        }
                        _this.parent().parent().parent().find("select[name='dealer']").find('option').remove().end().append(html);
                    } else {
                        html = '<option value="">Đại lý liên hệ</option>'
                        _this.parent().parent().parent().find("select[name='dealer']").find('option').remove().end().append(html);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })
        function saveData(url, data) {
            $.ajax({
                url: url,
                data: data,
                method: "POST",
                success: function(result) {
                    if (result.result.statusCode == 200) {
                        $("form")[0].reset();
                        $("form")[1].reset();
                        html = '<option value="">Đại lý liên hệ</option>'
                        $("select[name='dealer']").find('option').remove().end().append(html);
                        alert('Đăng kí thành công !')
                    } else {
                        alert(result.result.message)
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>

@extends('site.layouts.site-default')

@section('content')
    <section class="main-content">
        <div class="default-header">
            <div class="container">
                <h2>{{$produto->name}}</h2>
                <p><strong>Categoria: </strong>{{$categoriaProduto->name}}</p>
                <p>@if(isset($produto->description) && $produto->description != ''){{$produto->description}} @else {{$produto->name}} @endif</p>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="area-single-produto mt-4 py-4">
                <div class="img-detaque-single-produto col-sm-12 col-md-5 pe-sm-0 pe-lg-5">
                    <img class="img-principal" src="{{$produto->image_url}}" alt="{{$produto->name}}">
                    @if (isset($imgsProduto) && count($imgsProduto) > 0)
                    <div class="imagens-carrosel-produto mt-3 px-2">
                        <div class="img-carrosel-produto">
                            <img src="{{$produto->image_url}}" alt="{{$produto->name}}">
                        </div>
                        @foreach ($imgsProduto as $item)
                        <div class="img-carrosel-produto">
                            <img src="{{$item->image_url}}" alt="{{$item->description}}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="info-single-produto col-sm-12 col-md-7 ps-3">
                    <div class="price-single-produto mb-3">R$ {{$produto->price}}</div>
                    <div class="body-single-produto mb-5">
                        A Marteleira é uma marca renomada que se destaca pela fabricação de martelos de alta qualidade e durabilidade. Com um foco em inovação e ergonomia, os martelos da Marteleira são projetados para oferecer conforto e eficiência, atendendo tanto profissionais da construção quanto entusiastas do faça-você-mesmo. Reconhecida por sua robustez e precisão, a Marteleira se tornou a escolha preferida para quem busca ferramentas confiáveis e de alto desempenho.
                    </div>
                    <div class="shop-single-produto">
                        <a target="_blank" href="{{$produto->url}}" class="contato-shop">
                            <span class="me-2">Comprar</span>
                            <svg width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35 12.2491C35 5.94362 27.1607 0.834819 17.5 0.834819C7.83926 0.834819 0 5.96663 0 12.2491V12.9164C0 19.5901 6.84783 24.998 17.5 24.998C28.2213 24.998 35 19.5901 35 12.9164V12.2491Z" fill="#2D3277"/>
                                <path d="M34.3302 12.2473C34.3302 18.1615 26.7907 22.9941 17.4988 22.9941C8.20701 22.9941 0.66748 18.1845 0.66748 12.2473C0.66748 6.31001 8.20701 1.50037 17.4988 1.50037C26.7907 1.50037 34.3302 6.31001 34.3302 12.2473Z" fill="#F7D032"/>
                                <path d="M11.9088 8.84572C11.9088 8.86873 11.7244 9.02982 11.8397 9.1679C12.1163 9.51309 12.9233 9.69719 13.7534 9.51309C14.2376 9.39802 14.8831 8.89175 15.4826 8.40848C16.1513 7.87919 16.7968 7.3499 17.4655 7.14279C18.1572 6.91266 18.6183 7.00471 18.9181 7.09677C19.2408 7.18882 19.6328 7.39593 20.2323 7.85618C21.3851 8.73066 26.0195 12.7579 26.8034 13.4482C27.449 13.1491 30.308 11.9294 34.2046 11.0779C33.8588 9.00681 32.6137 7.11978 30.7 5.55492C28.0254 6.68254 24.7744 7.25785 21.5926 5.693C21.5696 5.693 19.8403 4.86454 18.1572 4.91057C15.621 4.97961 14.5373 6.0612 13.3845 7.21183L11.9088 8.84572Z" fill="white"/>
                                <path d="M26.6453 13.9354C26.5992 13.8893 21.204 9.17176 19.982 8.27427C19.2672 7.74498 18.8752 7.60691 18.4602 7.56088C18.2527 7.53787 17.953 7.58389 17.7455 7.62992C17.1691 7.79101 16.4312 8.27427 15.7857 8.80356C15.094 9.35586 14.4484 9.86214 13.8719 10.0002C13.1111 10.1613 12.1658 9.9772 11.7507 9.67804C11.5893 9.56298 11.451 9.4249 11.4049 9.28683C11.2435 8.91862 11.5432 8.64247 11.5893 8.57343L13.065 6.96255C13.2494 6.77845 13.4108 6.61736 13.5953 6.45628C13.1111 6.52531 12.673 6.64038 12.2349 6.75544C11.7046 6.91653 11.1743 7.0546 10.644 7.0546C10.4135 7.0546 9.26062 6.8705 9.03005 6.80146C7.69277 6.43326 6.49382 6.06506 4.74152 5.25962C2.6203 6.82448 1.21385 8.80356 0.798828 10.9667C1.09856 11.0588 1.58275 11.1969 1.79026 11.2429C6.58605 12.3015 8.06167 13.4061 8.33835 13.6362C8.63809 13.314 9.05311 13.1069 9.51424 13.1069C10.0445 13.1069 10.5287 13.3831 10.8054 13.7743C11.0821 13.5672 11.451 13.3831 11.9352 13.3831C12.1658 13.3831 12.3963 13.4291 12.6269 13.4981C13.1572 13.6822 13.4569 14.0504 13.5953 14.3726C13.7797 14.2806 14.0103 14.2345 14.2639 14.2345C14.5175 14.2345 14.7942 14.3036 15.0478 14.4186C15.924 14.7868 16.0623 15.6613 15.9932 16.3057H16.1776C17.2152 16.3057 18.0683 17.1571 18.0683 18.1927C18.0683 18.5149 17.976 18.814 17.8377 19.0902C18.1144 19.2513 18.8522 19.6195 19.4747 19.5274C19.982 19.4584 20.1664 19.2973 20.2356 19.1822C20.2817 19.1132 20.3278 19.0442 20.2817 18.9751L18.9214 17.4793C18.9214 17.4793 18.6908 17.2722 18.783 17.1801C18.8522 17.0881 18.9905 17.2262 19.0828 17.2952C19.7745 17.8705 20.6045 18.722 20.6045 18.722C20.6276 18.722 20.6737 18.8371 20.9734 18.9061C21.2501 18.9521 21.7112 18.9291 22.034 18.653C22.1262 18.5839 22.1954 18.4919 22.2646 18.4228L22.2415 18.4458C22.5874 18.0086 22.1954 17.5483 22.1954 17.5483L20.6275 15.7764C20.6275 15.7764 20.397 15.5693 20.4892 15.4772C20.5584 15.4082 20.6967 15.5232 20.812 15.5923C21.4115 15.9835 22.1032 16.6969 22.7949 17.3642C22.9332 17.4563 23.5327 17.8245 24.3166 17.3182C24.8008 16.996 24.893 16.6278 24.87 16.3287C24.8469 15.9375 24.5472 15.6613 24.5472 15.6613L22.4029 13.4981C22.4029 13.4981 22.1723 13.314 22.2646 13.199C22.3337 13.1069 22.4721 13.245 22.5643 13.314C23.256 13.8893 25.1005 15.5923 25.1005 15.5923C25.1236 15.6153 25.7692 16.0755 26.5531 15.5693C26.8298 15.3852 27.0142 15.109 27.0373 14.8098C27.0373 14.2575 26.6453 13.9354 26.6453 13.9354Z" fill="white"/>
                                <path d="M16.2113 16.6735C15.8885 16.6735 15.5196 16.8576 15.4735 16.8346C15.4505 16.8116 15.4966 16.6735 15.5196 16.6045C15.5427 16.5355 15.9808 15.2007 14.9202 14.7405C14.0901 14.3953 13.6059 14.7865 13.4215 14.9706C13.3754 15.0166 13.3523 15.0166 13.3523 14.9476C13.3293 14.7175 13.237 14.0731 12.5223 13.843C11.5078 13.5438 10.8622 14.2342 10.7008 14.4873C10.6316 13.912 10.1474 13.4748 9.54796 13.4748C8.90237 13.4748 8.37207 14.0041 8.37207 14.6484C8.37207 15.2928 8.90237 15.8221 9.54796 15.8221C9.87075 15.8221 10.1474 15.707 10.3549 15.4999V15.5459C10.3088 15.8221 10.2166 16.8806 11.3233 17.3179C11.7614 17.479 12.1534 17.3639 12.4531 17.1338C12.5453 17.0647 12.5684 17.0878 12.5453 17.1798C12.4992 17.456 12.5453 18.0313 13.3754 18.3534C13.9979 18.6066 14.3668 18.3534 14.5974 18.1233C14.7127 18.0313 14.7357 18.0543 14.7357 18.1924C14.7588 18.9978 15.4274 19.6191 16.2113 19.6191C17.0183 19.6191 17.687 18.9518 17.687 18.1463C17.687 17.3179 17.0183 16.6735 16.2113 16.6735Z" fill="white"/>
                                <path d="M16.2111 19.5099C15.4733 19.5099 14.8738 18.9346 14.8507 18.1982C14.8507 18.1292 14.8507 17.9681 14.7124 17.9681C14.6432 17.9681 14.5971 18.0141 14.551 18.0602C14.3896 18.2212 14.1821 18.3593 13.8824 18.3593C13.744 18.3593 13.6057 18.3363 13.4443 18.2673C12.6604 17.9451 12.6604 17.4158 12.6834 17.2087C12.6834 17.1396 12.6834 17.0936 12.6604 17.0476L12.6142 17.0016H12.522C12.4759 17.0016 12.4298 17.0246 12.3837 17.0476C12.1531 17.2087 11.9456 17.2777 11.715 17.2777C11.5998 17.2777 11.4614 17.2547 11.3461 17.2087C10.3086 16.8175 10.4008 15.8509 10.4469 15.5518C10.4469 15.4827 10.4469 15.4367 10.4008 15.4137L10.3316 15.3447L10.2625 15.4137C10.055 15.5978 9.80133 15.7129 9.52465 15.7129C8.92518 15.7129 8.46405 15.2296 8.46405 14.6543C8.46405 14.056 8.94824 13.5957 9.52465 13.5957C10.055 13.5957 10.5161 13.9869 10.5853 14.5162L10.6314 14.7924L10.7928 14.5392C10.8158 14.5162 11.2308 13.8488 12.0378 13.8719C12.1992 13.8719 12.3376 13.8949 12.499 13.9409C13.1215 14.125 13.2368 14.7003 13.2598 14.9535C13.2829 15.0915 13.3751 15.0915 13.3982 15.0915C13.4443 15.0915 13.4904 15.0455 13.5135 15.0225C13.6287 14.9074 13.8824 14.7003 14.2974 14.7003C14.4818 14.7003 14.6893 14.7463 14.8969 14.8384C15.9113 15.2756 15.4502 16.5413 15.4502 16.5643C15.358 16.7714 15.358 16.8635 15.4502 16.9325L15.4963 16.9555H15.5194C15.5655 16.9555 15.6116 16.9325 15.7038 16.9095C15.8422 16.8635 16.0497 16.7945 16.2341 16.7945C16.995 16.7945 17.6175 17.4158 17.6175 18.1752C17.5945 18.8886 16.972 19.5099 16.2111 19.5099ZM26.8633 13.3656C25.2032 11.9158 21.3758 8.57896 20.3382 7.81954C19.7388 7.38231 19.3468 7.12917 18.9779 7.03712C18.8165 6.99109 18.5859 6.94507 18.3092 6.94507C18.0556 6.94507 17.7559 6.99109 17.4561 7.08314C16.7875 7.29025 16.1189 7.81954 15.4733 8.34883L15.4502 8.37185C14.8507 8.85511 14.2282 9.33838 13.744 9.45344C13.5365 9.49946 13.329 9.52248 13.1215 9.52248C12.5912 9.52248 12.1301 9.36139 11.9456 9.15428C11.9225 9.10825 11.9456 9.06222 12.0148 8.97017V8.94716L13.4673 7.38231C14.6202 6.23168 15.6808 5.1731 18.1709 5.10406H18.2862C19.831 5.10406 21.3758 5.79444 21.5602 5.88649C23.0128 6.59988 24.5115 6.94507 26.0102 6.94507C27.578 6.94507 29.192 6.55385 30.8982 5.77142C30.7137 5.61034 30.5062 5.44925 30.2987 5.31117C28.8 5.95552 27.3705 6.2777 26.0102 6.2777C24.6037 6.2777 23.1972 5.93251 21.8369 5.28816C21.7677 5.24213 20.0615 4.45971 18.2862 4.45971H18.1478C16.0497 4.50573 14.8738 5.24213 14.0899 5.88649C13.329 5.9095 12.6604 6.0936 12.0609 6.25469C11.5306 6.39276 11.0694 6.53084 10.6314 6.53084C10.4469 6.53084 10.1241 6.50783 10.1011 6.50783C9.59382 6.48481 7.01148 5.86347 4.98249 5.08105C4.77498 5.21912 4.56747 5.38021 4.38302 5.5413C6.52729 6.41578 9.13269 7.08314 9.93967 7.15218C10.1702 7.17519 10.4008 7.1982 10.6544 7.1982C11.2078 7.1982 11.7381 7.03712 12.2684 6.89904C12.5681 6.80699 12.914 6.71494 13.2829 6.6459C13.1907 6.73795 13.0984 6.83 12.9832 6.92205L11.5075 8.53294C11.3922 8.648 11.1386 8.97017 11.3 9.36139C11.3692 9.52248 11.5075 9.66055 11.692 9.79863C12.0378 10.0288 12.6834 10.1898 13.2598 10.1898C13.4904 10.1898 13.6979 10.1668 13.8824 10.1208C14.5049 9.98273 15.1505 9.45344 15.8422 8.92415C16.3955 8.48691 17.1795 7.93461 17.7789 7.77352C17.9403 7.72749 18.1478 7.70448 18.3092 7.70448H18.4476C18.8395 7.75051 19.2315 7.88858 19.9001 8.39486C21.1221 9.31536 26.5174 14.0099 26.5635 14.056C26.5635 14.056 26.9094 14.3551 26.8863 14.8384C26.8633 15.1145 26.7249 15.3677 26.4482 15.5288C26.2177 15.6668 25.9871 15.7589 25.7335 15.7589C25.3646 15.7589 25.134 15.5978 25.1109 15.5748C25.0879 15.5518 23.2434 13.8719 22.5747 13.2965C22.4594 13.2045 22.3672 13.1355 22.2519 13.1355C22.2058 13.1355 22.1366 13.1585 22.1136 13.2045C21.9983 13.3426 22.1366 13.5267 22.275 13.6417L24.4423 15.8049C24.4423 15.8049 24.719 16.0581 24.742 16.3802C24.7651 16.7484 24.5806 17.0476 24.2348 17.2777C23.9812 17.4388 23.7276 17.5309 23.4739 17.5309C23.1511 17.5309 22.9206 17.3698 22.8514 17.3468L22.5517 17.0476C21.9752 16.4953 21.3988 15.92 20.9838 15.5518C20.8685 15.4597 20.7763 15.3907 20.661 15.3907C20.6149 15.3907 20.5688 15.4137 20.5227 15.4367C20.4766 15.4827 20.4304 15.5978 20.5688 15.7589C20.6149 15.8279 20.6841 15.874 20.6841 15.874L22.2519 17.6459C22.275 17.6689 22.5747 18.0371 22.298 18.4053H22.2058L22.0675 18.5434C21.7908 18.7735 21.4449 18.7966 21.3066 18.7966C21.2374 18.7966 21.1683 18.7966 21.0991 18.7735C20.9377 18.7505 20.8455 18.7045 20.7994 18.6355L20.7763 18.6125C20.6841 18.5204 19.9001 17.715 19.2315 17.1627C19.1393 17.0936 19.047 17.0016 18.9318 17.0016C18.8857 17.0016 18.8395 17.0246 18.7934 17.0706C18.6551 17.2087 18.8626 17.4158 18.9318 17.5078L20.2691 18.9807C20.2691 19.0037 20.246 19.0267 20.2229 19.0727C20.1768 19.1417 20.0154 19.3028 19.5312 19.3719H19.3468C18.8395 19.3719 18.3092 19.1187 18.0326 18.9807C18.1478 18.7045 18.217 18.4284 18.217 18.1292C18.217 17.0246 17.3178 16.1271 16.2111 16.1271H16.1419C16.188 15.6208 16.0958 14.6773 15.1274 14.2401C14.8507 14.125 14.5741 14.056 14.2974 14.056C14.0899 14.056 13.8824 14.102 13.6749 14.171C13.4673 13.7798 13.1445 13.4806 12.6834 13.3426C12.4298 13.2505 12.1992 13.2275 11.9687 13.2275C11.5536 13.2275 11.1847 13.3426 10.8389 13.5957C10.5161 13.2045 10.0319 12.9514 9.52465 12.9514C9.08658 12.9514 8.6485 13.1355 8.32571 13.4346C7.91069 13.1124 6.25061 12.0539 1.80067 11.0643C1.59316 11.0183 1.08592 10.8802 0.786182 10.7882C0.740068 11.0183 0.693955 11.2714 0.670898 11.5246C0.670898 11.5246 1.47788 11.7317 1.63928 11.7547C6.18144 12.7673 7.68012 13.8028 7.93374 14.0099C7.84152 14.217 7.7954 14.4472 7.7954 14.6543C7.7954 15.5978 8.55627 16.3572 9.5016 16.3572C9.61688 16.3572 9.70911 16.3572 9.80133 16.3342C9.93967 17.0246 10.4008 17.5539 11.0925 17.807C11.3 17.876 11.5075 17.9221 11.692 17.9221C11.8303 17.9221 11.9456 17.8991 12.0839 17.876C12.2223 18.1982 12.499 18.6125 13.1445 18.8656C13.3751 18.9576 13.5826 19.0037 13.8132 19.0037C13.9976 19.0037 14.159 18.9807 14.3204 18.9116C14.6202 19.648 15.358 20.1543 16.165 20.1543C16.6953 20.1543 17.2256 19.9472 17.5945 19.556C17.9173 19.7401 18.609 20.0622 19.3007 20.0622C19.3929 20.0622 19.4851 20.0622 19.5543 20.0392C20.246 19.9472 20.5688 19.694 20.7071 19.4869C20.7302 19.4409 20.7532 19.4179 20.7763 19.3719C20.9377 19.4179 21.1221 19.4639 21.3297 19.4639C21.6986 19.4639 22.0675 19.3258 22.4364 19.0727C22.7822 18.8196 23.0359 18.4514 23.082 18.1292V18.1062C23.2203 18.1062 23.3586 18.1292 23.4739 18.1292C23.8659 18.1292 24.2348 18.0141 24.6037 17.784C25.2954 17.3237 25.4337 16.7254 25.4107 16.3342C25.526 16.3572 25.6643 16.3802 25.7796 16.3802C26.1485 16.3802 26.4943 16.2652 26.8402 16.0581C27.2783 15.7819 27.5319 15.3677 27.578 14.8614C27.6011 14.5162 27.5319 14.194 27.3474 13.8949C28.5233 13.3886 31.1979 12.4221 34.3336 11.7087C34.3106 11.4555 34.2875 11.2254 34.2414 10.9953C30.414 11.8237 27.578 13.0434 26.8633 13.3656Z" fill="#2D3277"/>
                            </svg>
                        </a>
                        <a href="/" class="wpp-shop">
                            <span class="me-2">Chamar no whatsapp</span>
                            <svg width="25" height="25" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M80.7703 13.8058C71.8826 4.90771 60.0627 0.0052185 47.4704 0C21.5229 0 0.405304 21.117 0.394867 47.0715C0.391388 55.3683 2.55881 63.4675 6.67853 70.6064L0 95L24.9555 88.4537C31.8317 92.2046 39.5731 94.1813 47.4513 94.1836H47.471C73.4157 94.1836 94.5355 73.0649 94.5454 47.1092C94.5506 34.5303 89.6586 22.7034 80.7703 13.8058ZM47.4704 86.2335H47.4542C40.4336 86.2306 33.548 84.3438 27.5398 80.7796L26.1117 79.9313L11.3027 83.8162L15.2554 69.3777L14.3248 67.8974C10.408 61.6677 8.33975 54.4673 8.34323 47.0744C8.35135 25.5017 25.9041 7.95068 47.4861 7.95068C57.937 7.95416 67.7611 12.0292 75.1482 19.425C82.5353 26.8208 86.6011 36.6513 86.5976 47.1063C86.5883 68.6808 69.0368 86.2335 47.4704 86.2335ZM68.9324 56.9293C67.7565 56.3401 61.9732 53.4955 60.8947 53.1024C59.8174 52.7098 59.0323 52.5144 58.249 53.6915C57.4644 54.8685 55.2106 57.5184 54.5241 58.3029C53.8376 59.088 53.1522 59.1866 51.9757 58.5974C50.7993 58.0089 47.0095 56.7663 42.5163 52.7591C39.0199 49.6402 36.6594 45.7883 35.9729 44.6113C35.2875 43.433 35.9671 42.8578 36.4889 42.2108C37.7623 40.6295 39.0373 38.9718 39.4293 38.1873C39.8218 37.4022 39.6253 36.7151 39.3307 36.1266C39.0373 35.538 36.6849 29.7484 35.705 27.3925C34.7494 25.0999 33.7805 25.4095 33.0581 25.3735C32.3727 25.3393 31.5882 25.3324 30.8037 25.3324C30.0197 25.3324 28.7453 25.6263 27.6668 26.8046C26.5889 27.9822 23.5505 30.8275 23.5505 36.6171C23.5505 42.4067 27.7653 47.9998 28.3533 48.7849C28.9413 49.57 36.6478 61.4508 48.4469 66.5452C51.2533 67.7582 53.4439 68.4813 55.1526 69.0234C57.9706 69.9187 60.5341 69.7923 62.5612 69.4896C64.8214 69.1516 69.5198 66.6438 70.5008 63.8965C71.4808 61.1487 71.4808 58.794 71.1862 58.3029C70.8928 57.8123 70.1083 57.5184 68.9324 56.9293Z" fill="#FFF"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="area-produtos-relacionados mt-5">
                <h4>Produtos Relacionados</h4>
                <div class="listagem-produtos-relacionados pb-4">
                    @foreach ($produtosRelacionados as $item)
                    <div class="col-lg-6 p-2">
                        <a href="/produto/{{$item->slug}}" class="card-produto">
                            <img class="img-card-produto" src="{{$item->image_url}}" alt="{{$item->name}}">
                            <div class="info-card-produto ps-3">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                                <div class="bottom-produto">
                                    <div class="card-price">
                                        R$ {{$item->price}}
                                    </div>
                                    <div class="tag-buy">
                                        <span class="material-symbols-outlined">
                                            sell
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seleciona todas as imagens dentro do carrossel
            var imagensCarrossel = document.querySelectorAll('.img-carrosel-produto img');

            imagensCarrossel.forEach(function(img) {
                img.addEventListener('click', function() {
                    // Ao clicar em uma imagem do carrossel, atualiza a imagem principal
                    var imagemPrincipal = document.querySelector('.img-principal');
                    if(imagemPrincipal) {
                        imagemPrincipal.src = this.src; // Atualiza o src da imagem principal
                        imagemPrincipal.alt = this.alt; // Opcional: também atualiza o alt, se necessário
                    }
                });
            });
        });
    </script>
@endsection

<style>
    .full,
    .w-full {
        width: 100%
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        line-height: 110%
    }

    .d-flex,
    .flex {
        display: flex
    }

    .flex {
        flex-flow: wrap
    }

    .flex-col {
        flex-flow: column
    }

    .flex-row {
        flex-flow: row
    }

    .full {
        height: 100%
    }

    .flex-full {
        flex: 1 0 auto
    }

    .m-0 {
        margin: 0 !important
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mt-1 {
        margin-top: .5rem !important
    }

    .mt-2 {
        margin-top: 1rem !important
    }

    .mt-3 {
        margin-top: 1.5rem !important
    }

    .mt-4 {
        margin-top: 2rem !important
    }

    .mx-auto {
        margin-left: auto !important;
        margin-right: auto !important
    }

    .m-4 {
        margin: 2rem !important
    }

    .mx-4 {
        margin-left: 2rem !important;
        margin-right: 2rem !important
    }

    .mx-2 {
        margin-left: 1rem !important;
        margin-right: 1rem !important
    }

    .my-1 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-2 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-4 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important
    }

    .mr-4 {
        margin-right: 2rem !important
    }

    .mr-2 {
        margin-right: 1rem !important
    }

    .mr-1,
    .mx-1 {
        margin-right: .5rem !important
    }

    .ml-1 {
        margin-left: .5rem !important
    }

    .ml--1 {
        margin-left: -1rem !important
    }

    .mx-1 {
        margin-left: .5rem !important
    }

    .p-0 {
        padding: 0 !important
    }

    .p-2 {
        padding: 1rem !important
    }

    .p-3 {
        padding: 1.5rem !important
    }

    .p-4 {
        padding: 2rem !important
    }

    .px-1 {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important
    }

    .px-2 {
        padding-left: 1rem !important;
        padding-right: 1rem !important
    }

    .px-4 {
        padding-left: 2rem !important;
        padding-right: 2rem !important
    }

    .py-2 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-4 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important
    }

    .pb-0 {
        padding-bottom: 0 !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mb-4 {
        margin-bottom: 2rem !important
    }

    .mb-2 {
        margin-bottom: 1rem !important
    }

    .pr-2 {
        padding-right: 1rem !important
    }

    .pr-3 {
        padding-right: 1.5rem !important
    }

    .pr-4 {
        padding-right: 2rem !important
    }

    .pb-4 {
        padding-bottom: 2rem !important
    }

    .pl-2 {
        padding-left: 1rem !important
    }

    .pl-3 {
        padding-left: 1.5rem !important
    }

    .pl-4 {
        padding-left: 2rem !important
    }

    .pt-0 {
        padding-top: 0 !important
    }

    .pt-2 {
        padding-top: 1rem !important
    }

    .pt-4 {
        padding-top: 2rem !important
    }

    .p-m-3 {
        padding: 0.5rem 0 !important;
    }

    @media (min-width:600px) {
        .my-m-2 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .p-m-3 {
            padding: 1.5rem !important;
        }

        .my-m-4 {
            margin-top: 2rem !important;
            margin-bottom: 2rem !important
        }
    }

    .bg-primary {
        /* background-color: #3d85c6 !important; */
        /* background-color: #3d6ed9 !important; */
        background-color: #05601b !important;
        color: #fff !important
    }

    .primary-border {
        /* border-color: #3d85c6 */
        border-color: #05601b !important
    }

    a {
        color: #3d85c6
    }

    .hover-text-primary:hover,
    .text-primary {
        /* color: #3d85c6 !important */
        color: #05601b !important
    }

    .text-light {
        color: #ffffffaa !important
    }

    .text-hover-white:hover {
        color: #fff;
    }

    .text-z-depth-2 {
        -webkit-text-shadow: 0 2px 2px rgba(0, 0, 0, .14), 0 3px 1px rgba(0, 0, 0, .12), 0 1px 5px rgba(0, 0, 0, .2);
        text-shadow: 0 2px 2px rgba(0, 0, 0, .14), 0 3px 1px rgba(0, 0, 0, .12), 0 1px 5px rgba(0, 0, 0, .2)
    }

    .z-depth-2 {
        -webkit-box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .35);
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .35)
    }

    .border-1,
    .border-2,
    .border-top-1 {
        border-style: solid
    }

    .border-top-1 {
        border-width: 1px 0 0
    }

    .border-1 {
        border-width: 1px
    }

    .border-2 {
        border-width: 2px
    }

    .black-border {
        border-color: #000
    }

    .accent-border {
        border-color: #ec008c
    }

    .white-border {
        border-color: #fff
    }

    .red-border {
        border-color: red
    }

    .grey-border.border-darken-2 {
        border-color: #616161
    }

    .grey-border {
        border-color: #9e9e9e
    }

    .grey-border.border-lighten-2 {
        border-color: #e0e0e0
    }

    .grey-border.border-lighten-1 {
        border-color: #bdbdbd
    }

    .border-radius-2 {
        border-radius: 2px
    }

    .border-radius-4 {
        border-radius: 4px
    }

    .border-radius-8 {
        border-radius: 8px !important
    }

    .border-round {
        border-radius: 50%
    }

    .border-radius-0 {
        border-radius: 0 !important
    }

    .h1 {
        font-size: 4.2rem;
        margin: 2.8rem 0 1.68rem
    }

    .h2 {
        font-size: 3.56rem;
        margin: 2.3733333333rem 0 1.424rem
    }

    .h3 {
        font-size: 2.92rem;
        margin: 1.9466666667rem 0 1.168rem
    }

    .h4 {
        font-size: 2.28rem;
        margin: 1.52rem 0 .912rem
    }

    .h5 {
        font-size: 1.64rem;
        margin: 1.0933333333rem 0 .656rem
    }

    .h6 {
        font-size: 1.15rem;
        margin: .7666666667rem 0 .46rem
    }

    .text-capitalize {
        text-transform: capitalize
    }

    .text-justify {
        text-align: justify;
    }

    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-nowrap {
        word-wrap: none;
        text-overflow: ellipsis !important
    }

    .fw-400 {
        font-weight: 400 !important;
    }

    .fw-500 {
        font-weight: 500
    }

    .fw-600 {
        font-weight: 600
    }

    .fw-700 {
        font-weight: 700
    }

    .lh-0 {
        line-height: 0 !important
    }

    .lh-i {
        line-height: initial
    }

    .lh-5 {
        line-height: 2.5rem !important
    }

    .h-0 {
        height: 0
    }

    .pos-rel {
        position: relative
    }

    .pos-abs {
        position: absolute
    }

    @media (min-width:992px) {
        .flex-full-xl {
            flex: 1 0 auto
        }
    }

    #footer,
    .sidenav .top-banner {
        background-size: cover;
        background-blend-mode: soft-light
    }

    article,
    div,
    figure,
    footer,
    header,
    section {
        box-sizing: border-box
    }

    a,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    i,
    p,
    span,
    strong {
        /* -moz-user-select: none;
        -ms-user-select: none;
        -webkit-user-select: none;
        user-select: none */
    }

    nav {
        color: #444;
        background-color: #fff
    }

    .brand-logo,
    nav ul li a {
        color: #444 !important
    }

    .input-field .prefix.active,
    .input-field input:focus+label,
    .input-field textarea:focus+label {
        color: #3d85c6 !important
    }

    .brand-img {
        height: 50px;
        margin-bottom: -12px
    }

    .small-drop {
        height: 0;
        opacity: 0;
        transition: 0.2s all ease;
    }

    .nav-wrapper .drop {
        position: relative;
    }

    .nav-wrapper .drop ul {
        background-color: #ffffff;
        position: absolute;
        left: 0;
        transition: all 0.3s ease;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16),
            0 2px 8px 0 rgba(0, 0, 0, 0.12);
    }

    .nav-wrapper .drop ul li {
        display: block;
        width: 100%;
    }

    .nav-wrapper .drop ul li a {
        width: 100%;
        display: inline-block;
        white-space: pre;
        box-sizing: border-box;
    }

    .nav-wrapper .drop:hover ul {
        -webkit-transform: scale(1);
        transform: scale(1);
    }


    #page_loader {
        width: 100vw;
        height: 100vh;
        left: 0;
        top: 0;
        z-index: 1000000
    }

    #page_loader>div {
        max-width: 300px;
        max-height: 300px;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto
    }

    #page_loader>div>img {
        max-width: 100px
    }

    .avatar-l,
    .avatar-m,
    .avatar-s {
        object-fit: cover;
        object-position: center;
        border-radius: 50%
    }

    .image-triggerer {
        cursor: pointer;
        transition: .3s
    }

    .avatar-s {
        height: 50px;
        width: 50px;
        margin-top: 6px;
        margin-bottom: -18px
    }

    .avatar-m {
        height: 100px;
        width: 100px
    }

    .avatar-l {
        height: 150px;
        width: 150px
    }

    .avatar-xl {
        height: 200px;
        width: 200px
    }

    .bottom-0 {
        bottom: 0
    }

    .sidenav .top-banner {
        background-color: #444;
        background-image: url(images/card.jpg);
        background-position: center;
        height: 150px
    }

    .sidenav {
        height: 100%;
        padding-bottom: 0
    }

    .sidenav .top-banner .user.dropdown-trigger>div:first-child {
        height: 50px
    }

    .nav-wrapper li,
    .nav-wrapper li a {
        outline: 0 !important;
        box-shadow: none !important
    }

    hr.short-border {
        border: 2px solid #05601b;
        width: 100px;
        margin: 0 auto
    }

    .home-banner {
        width: 100%;
        object-fit: cover;
        object-position: center;
        max-height: 240px
    }

    section.card-panel {
        margin: 2rem
    }

    @media (max-width:600px) {
        section.card-panel {
            margin: 1rem
        }

        .row.mx-2 {
            margin: 0px !important;
        }

    }

    .btn {
        text-transform: initial;
        letter-spacing: .25px;
        font-weight: 500;
        border-radius: 4px
    }

    .btn-large:hover,
    .btn-small:hover,
    .btn:hover {
        background-color: #ddd
    }

    .card-panel {
        border-radius: 8px
    }

    .progress {
        background-color: #bbdeff;
        height: 6px
    }

    .progress-holder {
        border-radius: 8px 8px 0 0;
        margin: 0 0 -16px;
        overflow: hidden;
        height: 16px
    }

    .progress-holder .progress {
        margin: 0;
        z-index: 4
    }

    .prevent-overlay {
        background-color: rgba(255, 255, 255, 0.25);
        position: absolute;
        z-index: 2;
        cursor: wait
    }

    .input-field input:focus,
    .input-field textarea:focus {
        border-bottom: 1px solid #3d85c6 !important;
        box-shadow: 0 1px 0 0 #3d85c6 !important
    }

    .serviceDropDownContainer .dropdown-content {
        transform: scaleY(1) !important;
        width: 100% !important
    }

    .userDropDownContainer .dropdown-content {
        width: 100% !important
    }

    #mobile-sidenav .dropdown-content li.disabled a,
    .nav-wrapper .dropdown-content li.disabled a {
        cursor: default !important;
        color: #888 !important
    }

    #mobile-sidenav .dropdown-content li.disabled:hover,
    .nav-wrapper .dropdown-content li.disabled:hover {
        background-color: transparent !important
    }

    div.serviceDropDownContainer .dropdown-content li a {
        text-align: center
    }

    .input-field button {
        margin-top: -45px
    }

    .flow-text li,
    .flow-text p {
        font-size: 1rem
    }

    .instructors .card .btn-floating i {
        font-size: 1.3rem;
    }

    #footer {
        background-image: url(images/footer_x600.webp);
        background-position: top;
        background-color: #181820
    }

    #footer a i.at-symbol {
        font-size: 14px
    }

    #footer.visible {
        background-image: url(images/footer.webp)
    }

    #footer .input-field label {
        color: #aaa
    }

    #footer .input-field input {
        color: #fff
    }

    #footer a.btn img,
    #footer a.btn svg {
        margin: -6px -12px
    }

    #footer a.btn svg {
        width: 24px;
        height: 24px
    }

    .facebook:hover {
        background-color: #3b5998
    }

    .linkedin:hover {
        background-color: #0077b5
    }

    .twitter:hover {
        background-color: #1da1f2
    }

    .instagram:hover {
        background-color: #e1306c
    }

    footer .left.shift-left {
        width: 50%;
        padding-left: 5rem
    }

    @media (min-width:600px) {

        .flow-text li,
        .flow-text p {
            font-size: 75%
        }
    }

    @media (max-width:600px) {
        .scrollable {
            height: calc(100vh - 56px)
        }
    }

    @media (max-width:400px) {
        .sidenav {
            width: 240px
        }

        .col.s12 {
            padding: 0
        }
    }

    @media (max-width:992px) {
        .dropdown-content {
            position: static
        }

        footer .left.shift-left {
            width: 100%;
            padding-left: 0
        }
    }

    @media (min-width:992px) {
        .serviceDropDownContainer .dropdown-content li {
            clear: none
        }
    }

    @media (orientation:landscape) {
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
            background-color: transparent
        }

        ::-webkit-scrollbar-thumb {
            /* background-color: #3d85c6 */
            background-color: #05601b
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #044D16
        }

        ::-webkit-scrollbar-thumb:active,
        ::-webkit-scrollbar-thumb:focus {
            background-color: #033810
        }

        ::-webkit-scrollbar-track {
            background-color: transparent
        }
    }
</style>
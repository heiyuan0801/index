<style>
.social-sidebar {
    position: fixed;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 9999;
    background: #fff;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.15);
}

.social-sidebar a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    margin: 8px 0;
    text-align: center;
    color: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
    text-decoration: none;
}

.social-sidebar a i {
    font-size: 20px;
    line-height: 1;
}

.social-sidebar a:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.social-sidebar .whatsapp { background: #25D366; }
.social-sidebar .instagram { background: #E4405F; }
.social-sidebar .facebook { background: #1877F2; }
.social-sidebar .twitter { background: #1DA1F2; }

/* 响应式样式 */
@media (max-width: 768px) {
    .social-sidebar {
        right: 10px;
        padding: 5px;
    }
    
    .social-sidebar a {
        width: 35px;
        height: 35px;
        margin: 5px 0;
    }
    
    .social-sidebar a i {
        font-size: 16px;
    }
}

/* 在移动端右侧显示 */
@media (max-width: 576px) {
    .social-sidebar {
        top: auto;
        bottom: 80px; /* 调高位置，避免与底部内容重叠 */
        right: 10px;
        transform: none;
        display: flex;
        flex-direction: column;
        padding: 8px 5px;
        background: rgba(255, 255, 255, 0.95); /* 半透明背景 */
    }
    
    .social-sidebar a {
        margin: 4px 0;
        width: 32px; /* 稍微缩小图标 */
        height: 32px;
    }

    .social-sidebar a i {
        font-size: 14px;
    }
}

/* 针对超小屏幕的额外优化 */
@media (max-width: 360px) {
    .social-sidebar {
        bottom: 90px; /* 更高的位置 */
        right: 5px;
        padding: 6px 4px;
    }
    
    .social-sidebar a {
        width: 28px; /* 更小的图标 */
        height: 28px;
        margin: 3px 0;
    }

    .social-sidebar a i {
        font-size: 12px;
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="social-sidebar">
    <a href="https://wa.me/+8613812345678" 
       class="whatsapp" 
       target="_blank" 
       rel="noopener"
       title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <a href="https://instagram.com/your-account" 
       class="instagram" 
       target="_blank" 
       rel="noopener"
       title="Instagram">
        <i class="fab fa-instagram"></i>
    </a>

    <a href="https://facebook.com/your-page" 
       class="facebook" 
       target="_blank" 
       rel="noopener"
       title="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a href="https://twitter.com/your-account" 
       class="twitter" 
       target="_blank" 
       rel="noopener"
       title="Twitter">
        <i class="fab fa-twitter"></i>
    </a>
</div> 
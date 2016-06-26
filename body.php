<script type="text/javascript "> 
    <?php if(is_home()) echo 'var isindex=true;var title="";';else echo 'var isindex=false;var title="',  get_the_title(),'";'; ?> 
    <?php if((($display_name = wp_get_current_user()->display_name) != null)) echo 'var visitor="',$display_name,'";'; else if(isset($_COOKIE['comment_author_'.COOKIEHASH])) echo 'var visitor="',$_COOKIE['comment_author_'.COOKIEHASH],'";';else echo 'var visitor="游客";';echo "\n"; ?> 
    </script> 
    <script type="text/javascript" src="这里填写spig.js的链接路径" charset="gb2312"></script> 
    <div id="spig" class="spig">
        <div id="message">加载中……</div> 
        <div id="mumu" class="mumu"></div> 
    </div> 
    <!--.end spig--> 
    <span class="hitokoto" id="hitokoto" style="display:none">Loading...</span> 
       <div id="hjsbox" style="display:none"> 
        </div> 
<script>
setTimeout("getkoto()",1000); 
            var t; 
            function getkoto(){ 
                var hjs = document.createElement('script'); 
                hjs.setAttribute('id', 'hjs'); 
                hjs.setAttribute('src', 'https://api.lwl12.com/hitokoto/main/get?encode=json'); 
                document.getElementById("hjsbox").appendChild(hjs); 
                t=setTimeout("getkoto()",2000); 
            } 
            function echokoto(result){ 
                var hc = eval(result); 
                //$("#hitokoto").fadeTo(300,0); 
                document.getElementById("hitokoto").innerHTML = hc.hitokoto; 
                //$("#hitokoto").fadeTo(300,0.75); 
            }
</script>

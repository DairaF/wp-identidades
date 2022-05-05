<?php
  $search = $_POST['searchTerm'];
?>
<script>
        const setTag = (tag) =>{
            let url = window.location.href;
            if(url.indexOf(tag) == -1){
                if (url.indexOf('?') == -1){
                    nextURL = window.location+"?"+tag+"="+tag;
					window.history.replaceState("nextState", "nextTitle", nextURL);
                }
                else{
                    nextURL = window.location+"&"+tag+"="+tag;
					window.history.replaceState("nextState", "nextTitle", nextURL);
                }
            }else{
                if(url.indexOf(`/?${tag}`) == -1){
					nextURL = url.replace(`&${tag}=${tag}`,'');
					window.history.replaceState("nextState", "nextTitle", nextURL);
                }else{
                    nextURL = url.replace(`/?${tag}=${tag}`,'/?');
					window.history.replaceState("nextState", "nextTitle", nextURL);
                }
            }
        }
  </script>
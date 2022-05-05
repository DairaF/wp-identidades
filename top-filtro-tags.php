<?php
  $search = $_POST['searchTerm'];
?>
<script>
    const tagsActive = () => {
        tagActive('identificacion');
        tagActive('salud');
        tagActive('reparacion');
        tagActive('participacion');
        tagActive('datos');
        tagActive('violencias');
      }
      const tagActive = (tag) =>{
        let url = window.location.href;
        if(url.indexOf(tag) == -1){
          document.getElementById(tag).classList.remove('active');
        }else{
          document.getElementById(tag).classList.add('active');
        }
      }
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
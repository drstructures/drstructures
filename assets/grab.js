$.ajax({
               type: "GET",
               url: "//ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=septembericious&api_key=e34f2e63e7aee0e8212e1033709a0e19&format=json",
               processData: true,
               data: {},
               dataType: "json",
               error: function(e){
                console.log(e);
               },
               success: function (data) {
                   $.each(data, function(i,item){
                    $(".topData").append('<p>'+'<a href='+item.track[0]['url']+'>'+item.track[0]['name']+' by '+item.track[0]['artist']['#text']+'</a></p>');

                    $(".topImg").append('<img src='+item.track[0]['image'][0]['#text']+'>'+'</img>');
                  });
               }
        });

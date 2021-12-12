
  $(function(){
    $(document).on('click','#delete',function(e){
      e.preventDefault();
      var link = $(this).attr("href");


          Swal.fire({
            title: 'Are you sure?',
            text: "You wont to Delete this Data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
          })

    })

  });

  // Received I/O  

  
  $(function(){
    $(document).on('click','#receivedio',function(e){
      e.preventDefault();
      var link = $(this).attr("href");


          Swal.fire({
            title: 'Are you sure The docs Received I/O?',
            text: "You are not able to Pending this Data Again!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Received I/O!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Received I/O!',
                'Your file has been Received I/O.',
                'success'
              )
            }
          })

    })

  });

   // Received PS  

  
   $(function(){
    $(document).on('click','#receivedFromio',function(e){
      e.preventDefault();
      var link = $(this).attr("href");


          Swal.fire({
            title: 'Are you sure The docs Received PS?',
            text: "You are not able to Pending this Data Again!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Received PS!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Received PS!',
                'Your file has been Received PS.',
                'success'
              )
            }
          })

    })

  });

  //  PS  SEND DSB

  
  $(function(){
    $(document).on('click','#senddsb',function(e){
      e.preventDefault();
      var link = $(this).attr("href");


          Swal.fire({
            title: 'Are you sure The docs Send DSB?',
            text: "You are not able to Pending this Data Again!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Send DSB!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Send DSB!',
                'Your file has beenSend DSB.',
                'success'
              )
            }
          })

    })

  });

  //  RECEIVED DSB 

  
  $(function(){
    $(document).on('click','#receiveddsb',function(e){
      e.preventDefault();
      var link = $(this).attr("href");


          Swal.fire({
            title: 'Are you sure The docs Received DSB?',
            text: "You are not able to Pending this Data Again!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Received DSB!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Received DSB!',
                'Your file has been Received DSB.',
                'success'
              )
            }
          })

    })

  });

    //  WAITTING FOR SIGN

  
    $(function(){
        $(document).on('click','#waittingspsign',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
    
    
              Swal.fire({
                title: 'Are you sure The docs Waitting for SP Sir Sign?',
                text: "You are not able to Pending this Data Again!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Waitting for SP Sir Sign!'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                    'Waitting for SP Sir Sign!',
                    'Your file has been Waitting for SP Sir Sign.',
                    'success'
                  )
                }
              })
    
        })
    
      });

       //  SP SIR SIGN OK   

  
    $(function(){
        $(document).on('click','#spsignok',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
    
    
              Swal.fire({
                title: 'Are you sure The docs  SP Sir Sign Ok?',
                text: "You are not able to Pending this Data Again!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Waitting for SP Sir Sign!'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                    'SP Sir Sign Ok!',
                    'Your file has been  SP Sir Sign Ok .',
                    'success'
                  )
                }
              })
    
        })
    
      });

       //  SEND TO MOFA     

  
    $(function(){
        $(document).on('click','#sendtomofa',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
    
    
              Swal.fire({
                title: 'Are you sure The docs  Send To MOFA?',
                text: "You are not able to Pending this Data Again!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Docs  Send To MOFA!'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                    'Docs Send To MOFA !',
                    'Your file has been  Send To MOFA .',
                    'success'
                  )
                }
              })
    
        })
    
      });

         //  RECEIVED FROM MOFA     

  
    $(function(){
        $(document).on('click','#receiveFrommofa',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
    
    
              Swal.fire({
                title: 'Are you sure The docs  RECEIVED FROM MOFA ?',
                text: "You are not able to Pending this Data Again!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Docs RECEIVED FROM MOFA !'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                    'Docs RECEIVED FROM MOFA !',
                    'Your file has been RECEIVED FROM MOFA  .',
                    'success'
                  )
                }
              })
    
        })
    
      });

          //  WAITTING FOR DELIVERY    
          
  
    $(function(){
        $(document).on('click','#waitfordeliver',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
    
    
              Swal.fire({
                title: 'Are you sure The docs  WAITTING FOR DELIVERY ?',
                text: "You are not able to Pending this Data Again!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Docs WAITTING FOR DELIVERY !'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                    'Docs WAITTING FOR DELIVERY !',
                    'Your file has been WAITTING FOR DELIVERY.',
                    'success'
                  )
                }
              })
    
        })
    
      });

        //  DOCUMENT DELIVERED    
        
  
        $(function(){
            $(document).on('click','#docsdelivered',function(e){
              e.preventDefault();
              var link = $(this).attr("href");
        
        
                  Swal.fire({
                    title: 'Are you sure The DOCUMENT DELIVERED ?',
                    text: "You are not able to Pending this Data Again!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, DOCUMENT DELIVERED !'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'DOCUMENT DELIVERED!',
                        'Your DOCUMENT has been  DELIVERED.',
                        'success'
                      )
                    }
                  })
        
            })
        
          });

          
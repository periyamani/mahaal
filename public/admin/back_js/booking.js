function viewDetails(data_id){
    jQuery.ajax({
            type: "POST",
            url: "/api/bookingDetails",
            data: {booking_id : data_id},
            dataType: 'json',
            success: function(data) {
             jQuery('#dateData').html(data['booking']['booking_date']);
             jQuery('#timeData').html(data['booking']['booking_time']);
             jQuery('#bookinggId').val(data['booking']['id']);
             
             if(data['vendor'].length > 0){
              jQuery('#vendorList').empty();
                  jQuery.each(data['vendor'], function( index, value ) {
                    jQuery('#vendorList').append('<li class="fusion-li-item book-li"><span style="height: 31.8px;  font-size: 24px; width: 74.8px; margin: 23px 0px 21px 0px; margin-right: 9.8px;" class="icon-wrapper circle-no"><img src="./../gallery/'+value['photo']+'" alt="user image" ></span>'+
                    '<div class="fusion-li-item-content text-book" style="margin-left: 50%;"><div class="d-inline-block align-middle">'+
                    'NAME  :'+value['title']+'<br />'+
                    'AMOUNT : Rs. '+value['amount']+' <br />'+
                    'CATEGORY : '+value['cname']+' <br />'+
                    'CONTACT :'+value['number']+' </div></li>');
                  });
              }
            },
        });
  }
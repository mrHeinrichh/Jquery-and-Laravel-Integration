$(document).ready(function () {
  // $("#items").hide();
  // $("#item").on("click", function (e) {
  //     e.preventDefault();
  //     // $("#customers").hide("slow");
  //     $("#customers").fadeOut(2000);
  //     $("#items").show();

  //     $.ajax({
  //         type: "GET",
  //         url: "/api/item",
  //         dataType: "json",
  //         success: function (data) {
  //             // console.log(data);
  //             $.each(data, function (key, value) {
  //                 // console.log(value);
  //                 var id = value.item_id;
  //                 var tr = $("<tr>");
  //                 var img =
  //                     "<img src=" +
  //                     value.img_path +
  //                     " width='200px', height='200px'/>";
  //                 tr.append($("<td>").html(value.item_id));
  //                 tr.append($("<td>").html(value.description));
  //                 tr.append($("<td>").html(value.cost_price));
  //                 tr.append($("<td>").html(value.sell_price));
  //                 tr.append($("<td>").html(value.title));
  //                 tr.append($("<td>").html(img));
  //                 tr.append(
  //                     "<td align='center'><a href='#' data-bs-toggle='modal' data-bs-target='#editItem' id='editbtn' data-id=" +
  //                         id +
  //                         "><i class='fa fa-pencil' aria-hidden='true' style='font-size:24px' ></a></i></td>"
  //                 );
  //                 tr.append(
  //                     "<td><a href='#'  class='deletebtn' data-id=" +
  //                         id +
  //                         "><i  class='fa fa-trash' style='font-size:24px; color:red' ></a></i></td>"
  //                 );

  //                 $("#ibody").append(tr);
  //             });
  //         },
  //         error: function () {
  //             console.log("AJAX load did not work");
  //             alert("error");
  //         },
  //     });
  // });

  // $("#itemModal").on("show.bs.modal", function (e) {
  //     var id = $(e.relatedTarget).attr("data-id");
  //     // console.log(id);
  //     $("<input>")
  //         .attr({ type: "hidden", id: "itemid", name: "item_id", value: id })
  //         .appendTo("#iform");
  //     $.ajax({
  //         type: "GET",
  //         url: "/api/item/" + id + "/edit",
  //         success: function (data) {
  //             // console.log(data);
  //             $("#desc").val(data.description);
  //             $("#sell").val(data.sell_price);
  //             $("#cost").val(data.cost_price);
  //             $("#image").val(data.img_path);
  //         },
  //         error: function () {
  //             console.log("AJAX load did not work");
  //             alert("error");
  //         },
  //     });
  // });
  // $("#itemSubmit").on("click", function (e) {
  //     // e.preventDefault();
  //     // alert("test");
  //     var id = $("#itemid").val();
  //     // var data = $("#updateform").serialize();
  //     var data = $("#iform")[0];
  //     // console.log(data);
  //     let formData = new FormData($("#iform")[0]);
  //     // console.log(data);
  //     $.ajax({
  //         type: "POST", //PUT
  //         url: "/api/item/" + id,
  //         data: formData,
  //         contentType: false,
  //         processData: false,
  //         headers: {
  //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  //         },
  //         dataType: "json",
  //         success: function (data) {
  //             console.log(data);
  //             $("#itemModal").each(function () {
  //                 $(this).modal("hide");
  //             });
  //             $("tr td:contains(" + id + ")").remove();
  //             var img =
  //                 "<img src=" +
  //                 data.img_path +
  //                 " width='200px', height='200px'/>";
  //             var tr = $("<tr>");
  //             tr.append($("<td>").html(data.item_id));
  //             tr.append($("<td>").html(data.description));
  //             tr.append($("<td>").html(data.cost_price));
  //             tr.append($("<td>").html(data.sell_price));
  //             tr.append($("<td>").html(data.title));
  //             tr.append($("<td>").html(img));
  //             tr.append(
  //                 "<td align='center'><a href='#' data-bs-toggle='modal' data-bs-target='#itemModal' id='editbtn' data-id=" +
  //                     data.item_id +
  //                     "><i class='fa fa-pencil-square-o' aria-hidden='true' style='font-size:24px' ></a></i></td>"
  //             );
  //             tr.append(
  //                 "<td><a href='#'  class='deletebtn' data-id=" +
  //                     data.item_id +
  //                     "><i  class='fa fa-trash-o' style='font-size:24px; color:red' ></a></i></td>"
  //             );
  //             $("#itable").prepend(tr.hide().fadeIn(5000));
  //         },
  //         error: function (error) {
  //             console.log(error);
  //         },
  //     });
  // });

  // $("#ibody").on("click", ".deletebtn", function (e) {
  //     var id = $(this).data("id");
  //     var $tr = $(this).closest("tr");
  //     // var id = $(e.relatedTarget).attr('id');
  //     console.log(id);
  //     e.preventDefault();
  //     bootbox.confirm({
  //         message: "do you want to delete this item",
  //         buttons: {
  //             confirm: {
  //                 label: "yes",
  //                 className: "btn-success",
  //             },
  //             cancel: {
  //                 label: "no",
  //                 className: "btn-danger",
  //             },
  //         },
  //         callback: function (result) {
  //             if (result)
  //                 $.ajax({
  //                     type: "DELETE",
  //                     url: "/api/item/" + id,
  //                     headers: {
  //                         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
  //                             "content"
  //                         ),
  //                     },
  //                     dataType: "json",
  //                     success: function (data) {
  //                         console.log(data);
  //                         // bootbox.alert('success');
  //                         $tr.find("td").fadeOut(2000, function () {
  //                             $tr.remove();
  //                         });
  //                     },
  //                     error: function (error) {
  //                         console.log(error);
  //                     },
  //                 });
  //         },
  //     });
  // });

  // $("#editItem").on("show.bs.modal", function (e) {
  //     var id = $(e.relatedTarget).attr("data-id");
  //     console.log(id);
  //     $("<input>")
  //         .attr({
  //             type: "hidden",
  //             id: "itemid",
  //             name: "item_id",
  //             value: id,
  //         })
  //         .appendTo("#updateItem");
  //     $.ajax({
  //         type: "GET",
  //         url: "/api/item/" + id + "/edit",
  //         success: function (data) {
  //             console.log(data);
  //             $("#idescription").val(data.description);
  //             $("#icost").val(data.cost_price);
  //             $("#isell").val(data.sell_price);
  //             $("#ititle").val(data.title);
  //             $("#iimg").val(data.img);
  //         },
  //         error: function () {
  //             console.log("AJAX load did not work");
  //             alert("error");
  //         },
  //     });
  // });

  // $("#editItem").on("hidden.bs.modal", function (e) {
  //     $("#updateItem").trigger("reset");
  //     $("#itemid").remove();
  // });

  // $("#btnItem").on("click", function (e) {
  //     var id = $("#itemid").val();
  //     var data = $("#updateItem").serialize();
  //     console.log(data);
  //     $.ajax({
  //         type: "PUT",
  //         url: "/api/item/" + id,
  //         data: data,
  //         headers: {
  //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  //         },
  //         dataType: "json",
  //         success: function (data) {
  //             console.log(data);
  //             $("#editItem").each(function () {
  //                 $(this).modal("hide");
  //                 window.location.reload();
  //             });
  //         },
  //         error: function (error) {
  //             console.log(error);
  //         },
  //     });
  // });

  // $("#customerbtn").on("click", function (e) {
  //     e.preventDefault();
  //     $("#items").hide("slow");
  //     $("#customers").show();
  // });

  $.ajax({
      type: "GET",
      url: "/api/customer/all",
      dataType: "json",
      success: function (data) {
          // console.log(data);
          $.each(data, function (key, value) {
              // console.log(value);
              id = value.customer_id;
              var tr = $("<tr>");
              tr.append($("<td>").html(value.customer_id));
              tr.append($("<td>").html(value.title));
              tr.append($("<td>").html(value.lname));
              tr.append($("<td>").html(value.fname));
              tr.append($("<td>").html(value.addressline));
              tr.append($("<td>").html(value.town));
              tr.append($("<td>").html(value.zipcode));
              tr.append($("<td>").html(value.phone));
              tr.append($("<td>").html(value.creditlimit));
              tr.append($("<td>").html(value.level));
              // tr.append(
              //     "<td align='center'><a href=" +
              //         "/api/customer/" +
              //         id +
              //         "/edit" +
              //         "><i class='fa fa-pencil-square-o' aria-hidden='true' style='font-size:24px' ></a></i></td>"
              // );
              tr.append(
                  "<td align='center'><a href='#' data-bs-toggle='modal' data-bs-target='#editModal' id='editbtn' data-id=" +
                      id +
                      "><i class='fa fa-pencil-square-o' aria-hidden='true' style='font-size:24px' ></a></i></td>"
              );
              tr.append(
                  "<td><a href='#'  class='deletebtn' data-id=" +
                      id +
                      "><i  class='fa fa-trash-o' style='font-size:24px; color:red' ></a></i></td>"
              );
              $("#cbody").append(tr);
          });
      },
      error: function () {
          console.log("AJAX load did not work");
          alert("error");
      },
  });

  $("#myFormSubmit").on("click", function (e) {
      e.preventDefault();
      var data = $("#cform").serialize();
      console.log(data);
      $.ajax({
          type: "POST",
          url: "/api/customer",
          data: data,
          headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
          dataType: "json",
          success: function (data) {
              console.log(data);
              // $("myModal").modal("hide");
              $("#myModal").each(function () {
                  $(this).modal("hide");
              });
              var tr = $("<tr>");
              tr.append($("<td>").html(data.customer_id));
              tr.append($("<td>").html(data.title));
              tr.append($("<td>").html(data.lname));
              tr.append($("<td>").html(data.fname));
              tr.append($("<td>").html(data.addressline));
              tr.append($("<td>").html(data.phone));
              tr.append(
                  "<td align='center'><a href='#' data-bs-toggle='modal' data-bs-target='#editModal' id='editbtn' data-id=" +
                      id +
                      "><i class='fa fa-pencil-square-o' aria-hidden='true' style='font-size:24px' ></a></i></td>"
              );
              tr.append(
                  "<td><a href='#'  class='deletebtn' data-id=" +
                      id +
                      "><i  class='fa fa-trash-o' style='font-size:24px; color:red' ></a></i></td>"
              );
              $("#cbody").prepend(tr);
          },
          error: function (error) {
              console.log(error);
          },
      });
  });

  $("#cbody").on("click", ".deletebtn", function (e) {
      var id = $(this).data("id");
      var $tr = $(this).closest("tr");
      // var id = $(e.relatedTarget).attr('id');
      console.log(id);
      e.preventDefault();
      bootbox.confirm({
          message: "do you want to delete this customer",
          buttons: {
              confirm: {
                  label: "yes",
                  className: "btn-success",
              },
              cancel: {
                  label: "no",
                  className: "btn-danger",
              },
          },
          callback: function (result) {
              if (result)
                  $.ajax({
                      type: "DELETE",
                      url: "/api/customer/" + id,
                      headers: {
                          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                              "content"
                          ),
                      },
                      dataType: "json",
                      success: function (data) {
                          console.log(data);
                          // bootbox.alert('success');
                          $tr.find("td").fadeOut(2000, function () {
                              $tr.remove();
                          });
                      },
                      error: function (error) {
                          console.log(error);
                      },
                  });
          },
      });
  });

  $("#editModal").on("show.bs.modal", function (e) {
      var id = $(e.relatedTarget).attr("data-id");
      console.log(id);
      $("<input>")
          .attr({
              type: "hidden",
              id: "customerid",
              name: "customer_id",
              value: id,
          })
          .appendTo("#updateform");
      $.ajax({
          type: "GET",
          url: "/api/customer/" + id + "/edit",
          success: function (data) {
              console.log(data);
              $("#etitle").val(data.title);
              $("#euserid").val(data.user_id);
              $("#elname").val(data.lname);
              $("#efname").val(data.fname);
              $("#eaddress").val(data.addressline);
              $("#etown").val(data.town);
              $("#ezipcode").val(data.zipcode);
              $("#ephone").val(data.phone);
              $("#ecredit").val(data.creditlimit);
              $("#elevel").val(data.level);
          },
          error: function () {
              console.log("AJAX load did not work");
              alert("error");
          },
      });
  });

  $("#editModal").on("hidden.bs.modal", function (e) {
      $("#updateform").trigger("reset");
      $("#customerid").remove();
  });

  $("#updatebtn").on("click", function (e) {
      var id = $("#customerid").val();
      var data = $("#updateform").serialize();
      console.log(data);
      $.ajax({
          type: "PUT",
          url: "/api/customer/" + id,
          data: data,
          headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
          dataType: "json",
          success: function (data) {
              console.log(data);
              $("#editModal").each(function () {
                  $(this).modal("hide");
                  window.location.reload();
              });
          },
          error: function (error) {
              console.log(error);
          },
      });
  });
});

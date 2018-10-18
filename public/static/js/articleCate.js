$(function() {
	/*$('.d-firstNav').click(function(e) {
		console.log("111");
		dropSwift($(this), '.d-firstDrop');
        e.stopPropagation();
	});
	$('.d-secondNav').click(function(e) {
		dropSwift($(this), '.d-secondDrop');
		e.stopPropagation();
	});*/
    $('.first').on('click','.d-firstNav',function(e){
    	var that = $(this);
    	that.next().nextAll().remove()
        var data_id = $(this).attr('data-id')
        $.ajax({
            url:'/hx/admin/articles/cate',
            type:'get',
            data:{
                'value':data_id
            },
            success:function (data) {

                var result = data['data'];
                console.log(result)
                var str = '<ul class="d-firstDrop s-firstDrop">';
                $.each(result,function(n,value) {
                    str += ' <li> <div class="d-secondNav s-secondNav" data-v="'+ value.id +'">';
                    str += ' <i class="fa fa-minus-square-o"></i> <span><a href="#" class="mdspan" data-ids="'+value.id+'">'+value.cate_name + '</a></span>'
                    str += '<i class="fa fa-caret-right fr"></i></div> <ul class="d-secondDrop s-secondDrop"> <li class="s-thirdItem"><a href="#"></a> </li> </ul> </li> ';

                });
                str += '</ul>';
                that.after(str)
            }
        });
        dropSwift($(this), '.d-firstDrop');
        e.stopPropagation();
    })
	$('.first').on('click','.d-secondNav',function(e){

        dropSwift($(this), '.d-secondDrop');
        e.stopPropagation();
	})

    //修改名称
    $(document).on("dblclick",'.mdspan',function(){
        var td = $(this);
        var id = td.attr('data-ids');
        $('.mdinput').show()
        $('#name').val(td.html())
        $('#cate_id').val(id)
    });

    //确认修改
    $('#confirmBtn').click(function(){
        var name = $('#name').val()
        var cate_id = $('#cate_id').val()

        $.ajax({
            url:'/hx/admin/updateArticleCate',
            type:'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                'cate_id':cate_id,
                'name':name
            },
            success:function (data) {
                if(data['code']){
                    alert('修改失败')
                }else{
                    alert('修改成功')
                    $('.mdinput').hide()
                    window.location.href=''
                }
            }
        });
    });
    //取消
    $('#cancelBtn').click(function(){
        $('.mdinput').hide()
        $('#name').val('')
        $('#cate_id').val('')
    })
    //删除
    $('#delBtn').click(function(){
        var cate_id = $('#cate_id').val()
        if(confirm('删除该栏目的同时会删除栏目下所有的子级,请谨慎删除!!!')){
            $.ajax({
                url:'/hx/admin/delArticleCate',
                type:'get',
                data:{
                    'cate_id':cate_id,
                },
                success:function (data) {
                    if(data['code']){
                        alert('删除失败')
                    }else{
                        alert('删除成功')
                        $('.mdinput').hide()
                        window.location.href=''
                    }
                }
            })
        }

    })

	
	
	
	/**
	 * @param dom   点击的当前元素
	 * @param drop  下一级菜单
	 */
	function dropSwift(dom, drop) {
		//点击当前元素，收起或者伸展下一级菜单
		
		
		dom.next().slideToggle();
		
		//设置旋转效果
		
		//1.将所有的元素都至为初始的状态		
		dom.parent().siblings().find('.fa-caret-right').removeClass('iconRotate');
		
		//2.点击该层，将其他显示的下滑层隐藏		
		dom.parent().siblings().find(drop).slideUp();
		
		var iconChevron = dom.find('.fa-caret-right');
		if(iconChevron.hasClass('iconRotate')) {			
			iconChevron.removeClass('iconRotate');
		} else {
			iconChevron.addClass('iconRotate');
		}
	}
})
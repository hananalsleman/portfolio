
        $('body').on('click', '#editSkill', function (event) {
            event.preventDefault();
            var id = $(this).data('id');

            $.get('skill/' + id , function (data) {
                $('#skill_name').val(data.name);
                $('#skill_percentage').val(data.percentage);
                $('#form_editSkill').attr('action','skill/'+data.id+'/edit');
                
                })
            });

        $('body').on('click', '#deleteSkill', function (event) {
            event.preventDefault();
            var id = $(this).data('id');

            $.get('skill/' + id , function (data) {
                $('#delskill_name').text(data.name);
                $('#form_deleteSkill').attr('action','skill/'+data.id+'/delete');
                
                })
            });
        
        $('body').on('click', '#editTechnique', function (event) {
            event.preventDefault();
            var id = $(this).data('id');

            $.get('technique/' + id , function (data) {
                $('#technique_name').val(data.name);
                $('#technique_percentage').val(data.percentage);
                $('#form_editTechnique').attr('action','technique/'+data.id+'/edit');
                
                })
            });
        $('body').on('click', '#deleteTechnique', function (event) {
            event.preventDefault();
            var id = $(this).data('id');

            $.get('technique/' + id , function (data) {
                $('#deltechnique_name').text(data.name);
                $('#form_deleteTechnique').attr('action','technique/'+data.id+'/delete');
                
                })
        });
        
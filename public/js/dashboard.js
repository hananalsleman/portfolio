    
    
    //show sidebar
    $('body').on('click', '#collapse', function (event) {
        event.preventDefault();
        $('#sidebar').toggle("2s");
        });


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
    
    $('body').on('click', '#editAchievement', function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        $.get('achievement/' + id , function (data) {
            $('#achievement_title').val(data.title);
            $('#achievement_organisation').val(data.organisation);
            $('#achievement_year').val(data.year);
            $('#achievement_description').val(data.description);
            $('#form_editAchievement').attr('action','achievement/'+data.id+'/edit');
            
            })
        });
    $('body').on('click', '#deleteAchievement', function (event) {
        event.preventDefault();
        var id = $(this).data('id');

        $.get('achievement/' + id , function (data) {
            $('#delAchievement_title').text(data.title);
            $('#form_deleteAchievement').attr('action','achievement/'+data.id+'/delete');
            
            })
    });

    //Experience
    $('body').on('click', '#editExperience', function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        $.get('experience/' + id , function (data) {
            $('#experience_title').val(data.title);
            $('#experience_organisation').val(data.organisation);
            $('#experience_start_month').val(data.start_month);
            $('#experience_start_year').val(data.start_year);
            $('#experience_end_month').val(data.end_month);
            $('#experience_end_year').val(data.end_year);
            $('#experience_country').val(data.country);
            $('#experience_description').val(data.description);
            $('#form_editExperience').attr('action','experience/'+data.id+'/edit');
            
            })
        });
    $('body').on('click', '#deleteExperience', function (event) {
        event.preventDefault();
        var id = $(this).data('id');

        $.get('experience/' + id , function (data) {
            $('#delExperience_title').text(data.title);
            $('#form_deleteExperience').attr('action','experience/'+data.id+'/delete');
            
            })
    });
        
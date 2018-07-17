

function getData(id){
    console.log('hi');
    $.ajax({
        url : "/tugboat/"+id+"/please",
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            console.log('success', data);
            $('#tugboatName').html(data.main.strName);
            $('#infoModalLabel').html(data.main.strName);      
            $('#tugboatLength').html(data.main.strLength);
            $('#tugboatBreadth').html(data.main.strBreadth);
            $('#tugboatDepth').html(data.main.strDepth);
            $('#tugboatHorsePower').html(data.main.strDepth);
            $('#tugboatMaxSpeed').html(data.main.strMaxSpeed);
            $('#tugboatBollardPull').html(data.main.strBollardPull);
            $('#tugboatGrossTonnage').html(data.main.strGrossTonnage);
            $('#tugboatNetTonnage').html(data.main.strNetTonnage);
            $('#tugboatDryDocked').html(data.main.datLastDryDocked);    `   `
        }
    });
    $('#infoModal').modal('show');

}
function editData(findid){
    console.log('Requesting Data');
    console.log('Data Sent');
    $.ajax({
        url : "/tugboat/"+findid+"/please",
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            console.log('Data Recieved',data);
            console.log('Drydocked',data.main.datLastDrydocked);
            console.log('classnum',data.class.strClassNum);
            console.log(data.class.strHomePort);
            
            $('#editName').val(data.main.strName);
            $('#infoModalLabel').val(data.main.strName);      
            $('#editLength').val(data.main.strLength);
            $('#editBreadth').val(data.main.strBreadth);
            $('#editDepth').val(data.main.strDepth);
            $('#editHorsePower').val(data.main.strDepth);
            $('#editMaxSpeed').val(data.main.strMaxSpeed);
            $('#editBollardPull').val(data.main.strBollardPull);
            $('#editGrossTonnage').val(data.main.strGrossTonnage);
            $('#editNetTonnage').val(data.main.strNetTonnage);
            $('#editLastDryDocked').val(data.main.datLastDrydocked);
            $('#editLicenseNumber').val(data.class.strClassNum);
            
            $('#editLocBuilt').val(data.specs.strBuiltIn);
            $('#editDateBuilt').val(data.specs.strBuiltIn);
            $('#editBuilder').val(data.specs.strBuilder);
            $('#editMakerPower').val(data.specs.strMakerPower);
            $('#editHullMaterial').val(data.specs.strHullMaterial);
            $('#editDrive').val(data.specs.strDrive);
            $('#editAuxEngine').val(data.specs.strAuxEngine);
            
            $('#edit').val();
            $('#editClassNum').val(data.class.strClassNum);
            $('#editOfficialNum').val(data.class.strOfficialNum);
            $('#editIMONum').val(data.class.strIMONum);
            $('#editTradingArea').val(data.class.strTradingArea);
            $('#editType').val(data.class.strTugboatType);
            $('#editHomePort').val(data.class.strHomePort);
            
            
            //$('input[name=addISPSCompliance]:checked').val(data.class.enumISPSCodeCompliance);
            

        }
    });
    $(document).ready(function(){
        $('#cardView').removeClass('active');
        $('#detView').addClass('active');
        $('#editLayout').css('display', 'block');
        $('#cardLayout').css('display', 'none');
        $('#detLayout').css('display', 'none');
        $('#searchBar').css('display', 'none');
        $('#selectViews').css('display', 'none');
    });
}

function postData()
{
    $(document).ready(function(){     
        console.log('trying to submit data');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var tugboats = 
        {
            'name' : "MT Energy Drink",
            'length' : "7 Inches",
            'breadth' : "Gardenia"
        }
        $.ajax({
            url : "/tugboat/store",
            type : 'POST',
            data : {"_token" : $('meta[name=_token]').attr('content'),data: JSON.stringify({tugboats})},
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            },
            success : function(data){
                console.log('success pota');
                console.log(tugboats);
                
            },
            error : function(error){
                throw error;
            }

        });
    });
}

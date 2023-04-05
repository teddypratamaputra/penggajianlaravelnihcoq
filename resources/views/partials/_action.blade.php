<div class="btn-group" role="group">
    <form action="{{ $form_url}}" method="post" class="form-inline">
        @method('DELETE')
        @csrf
        <a href="{{ $edit_url}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>EDIT</a>&nbsp;
        <button type="submit" onclick="return confirm('Anda Yakin?')" class="btn btn-md btn-danger"><i class="fa fa-trash"></i> HAPUS</button>

    </form>
</div>

<div class="modal fade" id="editCommentModal{{ $comment->id }}" tabindex="-1" aria-labelledby="editCommentModalLabel{{ $comment->id }}">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="editCommentModalLabel{{ $comment->id }}">目標の編集</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
             </div>
             <form action="{{ route('comments.update', $comment) }}" method="post">
                 @csrf
                 @method('patch')                                                                    
                 <div class="modal-body">
                     <input type="text" class="form-control" name="title" value="{{ $comment->title }}">
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">更新</button>
                 </div>   
             </form>             
         </div>
     </div>
 </div>
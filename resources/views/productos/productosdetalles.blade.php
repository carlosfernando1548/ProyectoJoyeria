@extends("tienda.tienda")

@section("content")
    <section class="container text-justify">					
        <h2>{{$producto->pro_nombre}}</h2>
        <br>        
        <div class="row">
            <div class="col-md-5">
                <img src="{{$producto->pro_imagen!='noimage'?url('storage/'.$producto->pro_imagen):url('templete/images/the-founders-img.jpg')}}" alt="">
            </div>
            <div class="col-md-7">
                <p>{{$producto->pro_desc}}</p>
                <br>
            </div>            
        </div>        
    </section>

    <div class="comments">            
        <h2>{{count($comentarios)}} Comentarios</h2>        
        <ol class="commentlist">
            @foreach($comentarios as $c)
                <li class="comment">
                    <article class="comment-wrapper clearfix"> 

                        <div class="comment-avartar">
                            <img alt="" src="{{url('templete/images/avator.jpg')}}" height="60" width="60">
                        </div>

                        <div class="comment-content-wrapper clearfix">
                            
                            <div class="comment-head">
                                <span class="comment-author">{{$c->nombre}} </span>
                                <span class="comment-date">{{$c->com_fecha}}</span>
                            </div>

                            <div class="comment-message">
                                {{$c->com_coment}}
                            </div>                        
                        </div>
                        
                    </article>
                </li>
            @endforeach            
        </ol>
    </div>    
    
    @if(Session::has("id"))
        <div class="comment-respond">
        
            <h2>Comentar</h2>
            
            <form action="{{url('comentarios/comentar')}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$producto->pro_id}}">
                <textarea name="comentario" placeholder="Escriba su comentario" ></textarea>
                <input type="submit" class="btn btn default btn-fill" value="Publicar">
            </form>
            
        </div>
    @endif

@endsection
import tempImg from "@/assets/images/indexPage/news-temp.jpg";
import {ISpecialistsItem} from "@/core/entities/ISpecialistsItem";

export function IndexSpecsCard(props: { specialist : ISpecialistsItem}) {
    const specialist = props.specialist;
    return (
        <>
            <div className="specs-card">
                <h3>{props.specialist.name}</h3>
                <p className="specs-specialization">{props.specialist.speciality}</p>
                <img src={specialist.photoPath ? specialist.photoPath : tempImg}/>
            </div>
        </>
    );
}

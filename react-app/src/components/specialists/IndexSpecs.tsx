import '@/styles/components/index/specs.scss';

import {specialists} from "@/mokData/specs";
import {IndexSpecsCard} from "@/components/specialists/IndexSpecsCard";
import {useGetSpecsQuery} from "@/core/api/specialitiesApi";

export function IndexSpecs() {
    const {data} = useGetSpecsQuery(0);
    return (
        <>
            <section className="specs">
                <h2>Специалисты</h2>
                <div className="specs-container">
                    {data?.specs.slice(0,4).map(
                        specialist => <IndexSpecsCard key={specialist.id} specialist={specialist}/>
                    )}

                </div>
                <a href="/specialists" className="primary-btn more-btn">Посмотреть все</a>
            </section>
        </>
    );
}



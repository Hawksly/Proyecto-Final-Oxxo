/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controller;

import controller.exceptions.NonexistentEntityException;
import java.io.Serializable;
import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Query;
import javax.persistence.EntityNotFoundException;
import javax.persistence.Persistence;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import model.contacto;

/**
 *
 * @author migue
 */
public class contactoJpaController implements Serializable {

    public contactoJpaController(EntityManagerFactory emf) {
        this.emf = emf;
    }
    
    public contactoJpaController(){
        emf = Persistence.createEntityManagerFactory("oxxoPU");
}
    
    private EntityManagerFactory emf = null;

    public EntityManager getEntityManager() {
        return emf.createEntityManager();
    }

    public void create(contacto econtacto) {
        EntityManager em = null;
        try {
            em = getEntityManager();
            em.getTransaction().begin();
            em.persist(econtacto);
            em.getTransaction().commit();
        } finally {
            if (em != null) {
                em.close();
            }
        }
    }

    public void edit(contacto econtacto) throws NonexistentEntityException, Exception {
        EntityManager em = null;
        try {
            em = getEntityManager();
            em.getTransaction().begin();
            econtacto = em.merge(econtacto);
            em.getTransaction().commit();
        } catch (Exception ex) {
            String msg = ex.getLocalizedMessage();
            if (msg == null || msg.length() == 0) {
                Long id = econtacto.getId();
                if (findEcontacto(id) == null) {
                    throw new NonexistentEntityException("The econtacto with id " + id + " no longer exists.");
                }
            }
            throw ex;
        } finally {
            if (em != null) {
                em.close();
            }
        }
    }

    public void destroy(Long id) throws NonexistentEntityException {
        EntityManager em = null;
        try {
            em = getEntityManager();
            em.getTransaction().begin();
            contacto econtacto;
            try {
                econtacto = em.getReference(contacto.class, id);
                econtacto.getId();
            } catch (EntityNotFoundException enfe) {
                throw new NonexistentEntityException("The econtacto with id " + id + " no longer exists.", enfe);
            }
            em.remove(econtacto);
            em.getTransaction().commit();
        } finally {
            if (em != null) {
                em.close();
            }
        }
    }

    public List<contacto> findEcontactoEntities() {
        return findEcontactoEntities(true, -1, -1);
    }

    public List<contacto> findEcontactoEntities(int maxResults, int firstResult) {
        return findEcontactoEntities(false, maxResults, firstResult);
    }

    private List<contacto> findEcontactoEntities(boolean all, int maxResults, int firstResult) {
        EntityManager em = getEntityManager();
        try {
            CriteriaQuery cq = em.getCriteriaBuilder().createQuery();
            cq.select(cq.from(contacto.class));
            Query q = em.createQuery(cq);
            if (!all) {
                q.setMaxResults(maxResults);
                q.setFirstResult(firstResult);
            }
            return q.getResultList();
        } finally {
            em.close();
        }
    }

    public contacto findEcontacto(Long id) {
        EntityManager em = getEntityManager();
        try {
            return em.find(contacto.class, id);
        } finally {
            em.close();
        }
    }

    public int getEcontactoCount() {
        EntityManager em = getEntityManager();
        try {
            CriteriaQuery cq = em.getCriteriaBuilder().createQuery();
            Root<contacto> rt = cq.from(contacto.class);
            cq.select(em.getCriteriaBuilder().count(rt));
            Query q = em.createQuery(cq);
            return ((Long) q.getSingleResult()).intValue();
        } finally {
            em.close();
        }
    }
    
}
